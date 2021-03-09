<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\MataPelajaran;
use App\Models\TingkatanKelas;

class JadwalPelajaranSekolahController extends Controller
{

    public function index(Request $request) {
        $data = null;

        if($request->req == 'table') {
            $data = JadwalPelajaran::with('mataPelajaran')
                                   ->where('tahun_ajaran', $request->tahun_ajaran)
                                   ->where('kelas_id', $request->kelas_id)
                                   ->where('semester', $request->semester)
                                   ->orderBy('jam_pelajaran')
                                   ->get();

                                   $data = $data->groupBy('hari');

        }

        elseif($request->req == 'single') {
            $obj = JadwalPelajaran::findOrFail($request->id);
            return response()->json($obj);
        }

        $jam_pelajaran = [
            ['id' => '-', 'label' => '(07:30 - 08:00)' ],
            ['id' => '1', 'label' => '(08:00 - 08:45)' ],
            ['id' => '2', 'label' => '(08:45 - 09:30)' ],
            ['id' => '3', 'label' => '(09:30 - 10:15)' ],
            ['id' => '-', 'label' => '(10:15 - 10:30)' ],
            ['id' => '4', 'label' => '(10:30 - 11:15)' ],
            ['id' => '5', 'label' => '(11:15 - 12:00)' ],
            ['id' => '-', 'label' => '(12:00 - 12:15)' ],
            ['id' => '6', 'label' => '(12:15 - 13:00)' ],
            ['id' => '7', 'label' => '(13:00 - 13:45)' ],
            ['id' => '-', 'label' => '(13:45 - 14:00)' ],
            ['id' => '8', 'label' => '(14:00 - 14:45)' ],
            ['id' => '9', 'label' => '(14:45 - 15:30)' ],
        ];

        $kelas = TingkatanKelas::all();

        $tahun_ajaran = ['2019/2020', '2020/2021'];

        $pelajaran = MataPelajaran::join('gurus', 'gurus.id', 'guru_id')->selectRaw('mata_pelajarans.id, concat(nama_pelajaran, " | ", nama_guru) as name')->get();

        return view('admin.sekolah.jam', compact('jam_pelajaran', 'kelas', 'tahun_ajaran', 'data', 'pelajaran'));
    }

    public function write(Request $request) {

        if($request->req == 'write') {
            $obj = JadwalPelajaran::find($request->id);

            if(!$obj) {
                $obj = new JadwalPelajaran();
            }

            $obj->kelas_id = $request->kelas_id;
            $obj->mata_pelajaran_id = $request->mata_pelajaran_id;
            $obj->hari = $request->hari;
            $obj->semester = $request->semester;
            $obj->tahun_ajaran = $request->tahun_ajaran;
            $obj->jam_pelajaran = $request->jam_pelajaran;
            $obj->keterangan = $request->keterangan;
            $obj->save();

            return response()->json($obj);
        }
        elseif($request->req == 'delete') {
            $obj = JadwalPelajaran::findOrfail($request->id);
            return response()->json($obj->delete());
        }
    }
}
