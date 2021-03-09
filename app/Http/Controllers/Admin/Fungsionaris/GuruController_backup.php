<?php

namespace App\Http\Controllers\Admin\Fungsionaris;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\Guru;
use DataTables;

class GuruController extends Controller
{
    //read
    public function index(Request $request) {
        if($request->req == 'table') {
            return DataTables::of(Guru::get())->toJson();
        }

        elseif($request->req == 'single') {
            return response()->json(Guru::find($request->id));
        }

        return view('admin.fungsionaris.guru',['mySekolah' => User::sekolah()]);
    }

    public function write(Request $request) {
        if($request->req == 'write') {

            $this->validate($request, [
                'nama_guru' => "required",
                // isi validasi
            ]);

            $obj = Guru::find($request->id);

            if(!$obj) {
                $obj = new Guru();
            }

            $obj->nama_guru = $request->nama_guru;
            $obj->nip = $request->nip;
            $obj->nik = $request->nik;
            $obj->gelar_depan = $request->gelar_depan;
            $obj->gelar_belakang = $request->gelar_belakang;
            $obj->tempat_lahir = $request->tempat_lahir;
            $obj->tanggal_lahir = $request->tanggal_lahir;
            $obj->jenis_kelamin = $request->jenis_kelamin;
            $obj->agama = $request->agama;
            $obj->status = $request->status;
            $obj->alamat_tinggal = $request->alamat_tinggal;
            $obj->provinsi = $request->provinsi;
            $obj->kabupaten = $request->kabupaten;
            $obj->kecamatan = $request->kecamatan;
            $obj->dusun = $request->dusun;
            $obj->rt = $request->rt;
            $obj->rw = $request->rw;
            $obj->kode_pos = $request->kode_pos;
            $obj->no_telepon_rumah = $request->no_telepon_rumah;
            $obj->no_telepon = $request->no_telepon;
            $obj->email = $request->email;
            $obj->username = $request->username;
            $obj->password = $request->password;
            $obj->tanggal_mulai = $request->tanggal_mulai;
            $obj->bagian_guru = $request->bagian_guru;
            $obj->tahun_ajaran = $request->tahun_ajaran;
            $obj->semester = $request->semester;
            $obj->jenjang = $request->jenjang;
            $obj->save();

            return response()->json(true);
        }

        elseif($request->req == 'delete') {
            $obj = Guru::find($request->id);
            $obj->delete();
            return response()->json(true);
        }
    }
}
