<?php

namespace App\Http\Controllers\Admin\Absensi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\TingkatanKelas;
use App\Models\Siswa;
use App\Models\Absensi;

class SiswaController extends Controller
{
    public function index(Request $request) {
        $kelas = TingkatanKelas::all();
        $data = [];

        if($request->req == 'table') {
            $data = Siswa::with(['kelas',
                                 'absensi' => function($q) use($request){
                                     $q->where('tanggal', $request->tanggal)->where('kelas_id', $request->kelas_id);
                                }])
                         ->where('id_tingkatan_kelas', $request->kelas_id)
                         ->orderBy('nama_lengkap')
                         ->get();
            // return response()->json($data);
        }


        return view('admin.absensi.siswa', compact('kelas', 'data'), ['mySekolah' => User::sekolah()]);
    }

    public function write(Request $request) {
        if($request->req == 'write') {
            $this->validate($request, [
                'tanggal' => 'required|date',
                'kelas_id' => 'required',
                'siswa_id' => 'required',
                'status' => 'required'
            ]);

            $obj = Absensi::create([
                'kelas_id' => $request->kelas_id,
                'tanggal' => $request->tanggal,
                'siswa_id' => $request->siswa_id,
                'status' => $request->status,
                'editor_id' => $request->user()->id
            ]);

            return response()->json($obj);
        }
    }
}
