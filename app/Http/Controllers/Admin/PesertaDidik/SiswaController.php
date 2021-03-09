<?php

namespace App\Http\Controllers\Admin\PesertaDidik;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\SiswaOrangTua;
use App\Models\SiswaWali;
use App\Models\TingkatanKelas;
use App\User;
use App\Utils\CRUDResponse;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    private const AGAMA_RULE = "Islam,Budha,Kristen Protestan,Hindu,Kristen Katolik,Konghuchu";
    private const KEWARGANEGARAAN_RULE = "WNI,WNA";
    private const PENDIDIKAN_RULE = "SD/Sederajat,SMP/MTs/Sederajat,SMA/MA/Sederajat,D1/D2/D3,S1,S2,S3";
    private $siswaRules = [
        'nama_lengkap' => 'required',
        'kelas' => ['required', 'exists:tingkatan_kelas,id'],
        'jk' => ['nullable', 'in:Laki-Laki,Perempuan'],
        'agama' => ['nullable', 'in:' . SiswaController::AGAMA_RULE],
        'suku' => ['nullable', 'in:Melayu,Aceh,Batak,Karo,Mandailing,Simalungun,Pak-Pak,Nias,Angkola,Jawa'],
        'golongan_darah' => ['nullable', 'in:A,B,AB,O'],
        'tanggal_lahir' => ['nullable', 'date'],
        'tanggal_masuk' => ['nullable', 'date'],
        'berat_badan' => ['nullable', 'numeric'],
        'tinggi_badan' =>  ['nullable', 'numeric'],
        'jarak_rumah_sekolah' =>  ['nullable', 'numeric'],
        'foto' => ['nullable', 'mimes:jpeg,jpg,png', 'max:2000']
    ];

    private $siswaOrtuRules = [
        'anak_ke' =>  ['nullable', 'numeric'],
        'jumlah_saudara' =>  ['nullable', 'numeric'],
        'tanggal_lahir_ayah' => ['nullable', 'date'],
        'agama_ayah' => ['nullable', 'in:' . SiswaController::AGAMA_RULE],
        'kewarganegaraan_ayah' => ['nullable', 'in:' . SiswaController::KEWARGANEGARAAN_RULE],
        'pendidikan_ayah' => ['nullable', 'in:' . SiswaController::PENDIDIKAN_RULE],
        'agama_ibu' => ['nullable', 'in:' . SiswaController::AGAMA_RULE],
        'kewarganegaraan_ibu' => ['nullable', 'in:' . SiswaController::KEWARGANEGARAAN_RULE],
        'pendidikan_ibu' => ['nullable', 'in:' . SiswaController::PENDIDIKAN_RULE],
        'tanggal_lahir_ibu' => ['nullable', 'date']
    ];

    private $siswaWaliRules = [
        'tanggal_lahir_wali' => ['nullable', 'date'],
        'agama_wali' => ['nullable', 'in:' . SiswaController::AGAMA_RULE],
        'kewarganegaraan_wali' => ['nullable', 'in:' . SiswaController::KEWARGANEGARAAN_RULE],
        'pendidikan_wali' => ['nullable', 'in:' . SiswaController::PENDIDIKAN_RULE],
    ];

    private $siswaLoginRules = [
        'username' => ['required', 'unique:users'],
        'password' => ['required', 'confirmed', 'min:6']
    ];

    public function index() {
        $sekolahId = auth()->user()->id_sekolah;
        $userId = auth()->user()->id;
        $kelases = TingkatanKelas::where('user_id', $userId)->get();
        $users = User::has('siswa')
                ->where([
                    ['id_sekolah', $sekolahId],
                    ['role_id', 3]
                ])->whereNotNull('siswa_id')
                ->get();

        $siswas = [];
        foreach ($users as $user) {
            $siswa = $user->siswa;
            $siswa = $siswa::join('tingkatan_kelas AS kelas', 'siswas.id_tingkatan_kelas', 'kelas.id')
                        ->where('siswas.id', $siswa->id)
                        ->first(['siswas.*', 'kelas.name']);
            $siswas[] = $siswa;
        }

        return view('admin.pesertadidik.siswa', [
            'siswas' => $siswas,
            'kelases' => $kelases,
            'mySekolah' => User::sekolah()
        ]);
    }

    public function show($id) {
        $siswa = Siswa::with(['siswaOrangTua', 'siswaWali'])->find($id);
        return response()->json($siswa);
    }

    public function store(Request $req) {
        $data = $req->all();
        $validator = Validator::make($data, $this->siswaRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }
        $validator = Validator::make($data, $this->siswaOrtuRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $validator = Validator::make($data, $this->siswaWaliRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $validator = Validator::make($data, $this->siswaLoginRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $kelas = TingkatanKelas::find($data['kelas']);
        $kelasId = $kelas['id'];
        $exception = DB::transaction(function () use ($data, $kelasId, $req) {
            $auth = auth()->user();

            DB::beginTransaction();
            try {
                $data['tanggal_masuk'] = Carbon::parse($data['tanggal_masuk'])->format('Y-m-d');
                $data['tanggal_lahir'] = Carbon::parse($data['tanggal_lahir'])->format('Y-m-d');
                $siswaId = Siswa::create([
                    'nis' => $data['nis'],
                    'nisn' => $data['nisn'],
                    'tanggal_masuk' => $data['tanggal_masuk'],
                    'id_tingkatan_kelas' => $kelasId,
                    'nama_lengkap' => $data['nama_lengkap'],
                    'nama_panggilan' => $data['nama_panggilan'],
                    'jk' => $data['jk'],
                    'agama' => $data['agama'],
                    'suku' => $data['suku'],
                    'tempat_lahir' => $data['tempat_lahir'],
                    'tanggal_lahir' => $data['tanggal_lahir'],
                    'berat_badan' => $data['berat_badan'],
                    'tinggi_badan' => $data['tinggi_badan'],
                    'golongan_darah' => $data['golongan_darah'],
                    'hobi' => $data['hobi'],
                    'riwayat_penyakit' => $data['riwayat_penyakit'],
                    'moda_transportasi' => $data['moda_transportasi'],
                    'jarak_rumah_sekolah' => $data['jarak_rumah_sekolah'],
                    'is_siswa_pindahan' => $data['is_siswa_pindahan'] === 'Ya',
                    'alamat_tinggal' => $data['alamat_tinggal'],
                    'provinsi' => $data['provinsi'],
                    'kabupaten' => $data['kabupaten'],
                    'kecamatan' => $data['kecamatan'],
                    'dusun' => $data['dusun'],
                    'rt' => $data['rt'],
                    'rw' => $data['rw'],
                    'kode_pos' => $data['kode_pos'],
                    'no_telepon_rumah' => $data['no_telepon_rumah'],
                    'no_telepon' => $data['no_telepon'],
                    'foto' => $data['foto']
                ])->id;

                $data['tanggal_lahir_ayah'] = Carbon::parse($data['tanggal_lahir_ayah'])->format('Y-m-d');
                $data['tanggal_lahir_ibu'] = Carbon::parse($data['tanggal_lahir_ibu'])->format('Y-m-d');
                SiswaOrangTua::create([
                    'id_siswa' => $siswaId,
                    'status_anak' => $data['status_anak'],
                    'anak_ke' => $data['anak_ke'],
                    'jumlah_saudara' => $data['jumlah_saudara'],
                    'alamat_ortu' => $data['alamat_ortu'],
                    'nama_ayah' => $data['nama_ayah'],
                    'tempat_lahir_ayah' => $data['tempat_lahir_ayah'],
                    'tanggal_lahir_ayah' => $data['tanggal_lahir_ayah'],
                    'agama_ayah' => $data['agama_ayah'],
                    'kewarganegaraan_ayah' => $data['kewarganegaraan_ayah'],
                    'pendidikan_ayah' => $data['pendidikan_ayah'],
                    'pekerjaan_ayah' => $data['pekerjaan_ayah'],
                    'email_ayah' => $data['email_ayah'],
                    'no_telepon_ayah' => $data['no_telepon_ayah'],
                    'nama_ibu' => $data['nama_ibu'],
                    'tempat_lahir_ibu' => $data['tempat_lahir_ibu'],
                    'tanggal_lahir_ibu' => $data['tanggal_lahir_ibu'],
                    'agama_ibu' => $data['agama_ibu'],
                    'kewarganegaraan_ibu' => $data['kewarganegaraan_ibu'],
                    'pendidikan_ibu' => $data['pendidikan_ibu'],
                    'pekerjaan_ibu' => $data['pekerjaan_ibu'],
                    'email_ibu' => $data['email_ibu'],
                    'no_telepon_ibu' => $data['no_telepon_ibu']
                ]);

                $data['tanggal_lahir_wali'] = Carbon::parse($data['tanggal_lahir_wali'])->format('Y-m-d');
                SiswaWali::create([
                    'id_siswa' => $siswaId,
                    'nama_wali' => $data['nama_wali'],
                    'tempat_lahir_wali' => $data['tempat_lahir_wali'],
                    'tanggal_lahir_wali' => $data['tanggal_lahir_wali'],
                    'agama_wali' => $data['agama_wali'],
                    'kewarganegaraan_wali' => $data['kewarganegaraan_wali'],
                    'pendidikan_wali' => $data['pendidikan_wali'],
                    'pekerjaan_wali' => $data['pekerjaan_wali'],
                    'email_wali' => $data['email_wali']
                ]);

                User::create([
                    'role_id' => 3,
                    'siswa_id' => $siswaId,
                    'id_sekolah' => $auth['id_sekolah'],
                    'name' => $data['nama_lengkap'],
                    'username' => $data['username'],
                    'nis' => $data['nis'],
                    'password' => Hash::make($data['password'])
                ]);

                if ($req->file('foto')) {
                    $foto = $req->file('foto')->store('students', 'public');
                    Siswa::whereId($siswaId)->update([
                        'foto' => $foto
                    ]);
                }

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }
        });

        if ($exception) {
            return redirect()->back()->withErrors($exception)->withInput();
        }
        return redirect()->back()->with(CRUDResponse::successCreate("siswa"));
    }


    public function update($id, Request $req) {
        $siswa = Siswa::findOrFail($id);
        $data = $req->all();
        $validator = Validator::make($data, $this->siswaRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }
        $validator = Validator::make($data, $this->siswaOrtuRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $validator = Validator::make($data, $this->siswaWaliRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $siswaLoginRules['username'] = ['required'];
        $validator = Validator::make($data, $siswaLoginRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $kelas = TingkatanKelas::find($data['kelas']);
        $kelasId = $kelas['id'];
        $exception = DB::transaction(function () use ($data, $kelasId, $id) {
            $auth = auth()->user();

            DB::beginTransaction();
            try {
                $data['tanggal_masuk'] = Carbon::parse($data['tanggal_masuk'])->format('Y-m-d');
                $data['tanggal_lahir'] = Carbon::parse($data['tanggal_lahir'])->format('Y-m-d');
                Siswa::whereId($id)->update([
                    'nis' => $data['nis'],
                    'nisn' => $data['nisn'],
                    'tanggal_masuk' => $data['tanggal_masuk'],
                    'id_tingkatan_kelas' => $kelasId,
                    'nama_lengkap' => $data['nama_lengkap'],
                    'nama_panggilan' => $data['nama_panggilan'],
                    'jk' => $data['jk'],
                    'agama' => $data['agama'],
                    'suku' => $data['suku'],
                    'tempat_lahir' => $data['tempat_lahir'],
                    'tanggal_lahir' => $data['tanggal_lahir'],
                    'berat_badan' => $data['berat_badan'],
                    'tinggi_badan' => $data['tinggi_badan'],
                    'golongan_darah' => $data['golongan_darah'],
                    'hobi' => $data['hobi'],
                    'riwayat_penyakit' => $data['riwayat_penyakit'],
                    'moda_transportasi' => $data['moda_transportasi'],
                    'jarak_rumah_sekolah' => $data['jarak_rumah_sekolah'],
                    'is_siswa_pindahan' => $data['is_siswa_pindahan'] === 'Ya',
                    'alamat_tinggal' => $data['alamat_tinggal'],
                    'provinsi' => $data['provinsi'],
                    'kabupaten' => $data['kabupaten'],
                    'kecamatan' => $data['kecamatan'],
                    'dusun' => $data['dusun'],
                    'rt' => $data['rt'],
                    'rw' => $data['rw'],
                    'kode_pos' => $data['kode_pos'],
                    'no_telepon_rumah' => $data['no_telepon_rumah'],
                    'no_telepon' => $data['no_telepon'],
                    'foto' => $data['foto']
                ]);
                $data['tanggal_lahir_ayah'] = Carbon::parse($data['tanggal_lahir_ayah'])->format('Y-m-d');
                $data['tanggal_lahir_ibu'] = Carbon::parse($data['tanggal_lahir_ibu'])->format('Y-m-d');
                SiswaOrangTua::where('id_siswa', $id)->update([
                    'status_anak' => $data['status_anak'],
                    'anak_ke' => $data['anak_ke'],
                    'jumlah_saudara' => $data['jumlah_saudara'],
                    'alamat_ortu' => $data['alamat_ortu'],
                    'nama_ayah' => $data['nama_ayah'],
                    'tempat_lahir_ayah' => $data['tempat_lahir_ayah'],
                    'tanggal_lahir_ayah' => $data['tanggal_lahir_ayah'],
                    'agama_ayah' => $data['agama_ayah'],
                    'kewarganegaraan_ayah' => $data['kewarganegaraan_ayah'],
                    'pendidikan_ayah' => $data['pendidikan_ayah'],
                    'pekerjaan_ayah' => $data['pekerjaan_ayah'],
                    'email_ayah' => $data['email_ayah'],
                    'no_telepon_ayah' => $data['no_telepon_ayah'],
                    'nama_ibu' => $data['nama_ibu'],
                    'tempat_lahir_ibu' => $data['tempat_lahir_ibu'],
                    'tanggal_lahir_ibu' => $data['tanggal_lahir_ibu'],
                    'agama_ibu' => $data['agama_ibu'],
                    'kewarganegaraan_ibu' => $data['kewarganegaraan_ibu'],
                    'pendidikan_ibu' => $data['pendidikan_ibu'],
                    'pekerjaan_ibu' => $data['pekerjaan_ibu'],
                    'email_ibu' => $data['email_ibu'],
                    'no_telepon_ibu' => $data['no_telepon_ibu']
                ]);

                $data['tanggal_lahir_wali'] = Carbon::parse($data['tanggal_lahir_wali'])->format('Y-m-d');
                SiswaWali::where('id_siswa', $id)->update([
                    'nama_wali' => $data['nama_wali'],
                    'tempat_lahir_wali' => $data['tempat_lahir_wali'],
                    'tanggal_lahir_wali' => $data['tanggal_lahir_wali'],
                    'agama_wali' => $data['agama_wali'],
                    'kewarganegaraan_wali' => $data['kewarganegaraan_wali'],
                    'pendidikan_wali' => $data['pendidikan_wali'],
                    'pekerjaan_wali' => $data['pekerjaan_wali'],
                    'email_wali' => $data['email_wali']
                ]);

                User::where('siswa_id', $id)->update([
                    'name' => $data['nama_lengkap'],
                    'nis' => $data['nis'],
                    'password' => Hash::make($data['password'])
                ]);
                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }
        });

        if ($exception) {
            return redirect()->back()->withErrors($exception)->withInput();
        }

        if ($req->file('foto')) {
            $foto = $req->file('foto')->store('students', 'public');

            Siswa::whereId($id)->update([
                'foto' => $foto
            ]);

            if ($req->file('foto') && $siswa->foto && Storage::disk('public')->exists($siswa->foto)) {
                Storage::disk('public')->delete($siswa->foto);
            }
        }

        return redirect()->back()->with(CRUDResponse::successUpdate("siswa"));
    }

    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->back()->with(CRUDResponse::successDelete("siswa"));
    }
}
