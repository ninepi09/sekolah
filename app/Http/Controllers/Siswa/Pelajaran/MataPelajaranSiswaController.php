<?php

namespace App\Http\Controllers\Siswa\Pelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Guru;
use App\Models\MataPelajaran;

Use App\User;
class MataPelajaranSiswaController extends Controller
{

    public function index(Request $request) {

        if($request->req == 'table') {
            return DataTables::of(MataPelajaran::join('gurus', 'gurus.id', 'guru_id')->select('mata_pelajarans.*', 'nama_guru')->get())->addIndexColumn()->toJson();
        }
        if($request->req == 'single') {
            return response()->json(MataPelajaran::findOrFail($request->id));
        }
        $guru = Guru::all();
        //TODO: Guru belum filter id_sekolah
        return view('siswa.pelajaran.mata-pelajaran', array_merge(['mySekolah' => User::sekolah()], compact('guru')));
    }

    public function write(Request $request) {
        if($request->req == 'write') {
            $obj = MataPelajaran::find($request->id);

            if(!$obj){
                $obj = new MataPelajaran();
            }

            $obj->nama_pelajaran = $request->nama_pelajaran;
            $obj->kode_pelajaran = $request->kode_pelajaran;
            $obj->guru_id = $request->guru_id;
            $obj->aktif = $request->aktif == 'on';
            $obj->keterangan = $request->keterangan ?? '';
            $obj->sekolah_id = $request->sekolah_id;
            $obj->save();
            return response()->json($obj);


        }
        elseif($request->req == 'delete') {
            MataPelajaran::find($request->id)->delete();
        }
    }
}
