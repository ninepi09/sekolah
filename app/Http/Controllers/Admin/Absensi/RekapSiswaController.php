<?php

namespace App\Http\Controllers\Admin\Absensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TingkatanKelas;
use App\User;

class RekapSiswaController extends Controller
{
    public function index(Request $request) {
        $data = [];
        if($request->req == 'table') {
            $data = Siswa::where('id_tingkatan_kelas', $request->kelas_id)
                        ->with('kelas')
                        ->orderBy('nama_lengkap')
                         ->with(['absensis' => function($q) use($request){
                             $q->where('tanggal', '>=', $request->tanggal_mulai)
                               ->where('tanggal', '<=', $request->tanggal_selesai);
                         }])->get();
            //return response()->json($data);
        }

        $kelas = TingkatanKelas::all();

        return view('admin.absensi.rekap-siswa', compact('data', 'kelas'), ['mySekolah' => User::sekolah()]);
    }
}
