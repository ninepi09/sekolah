<?php

namespace App\Http\Controllers\Guru\Absensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TingkatanKelas;

class RekapSiswaGuruController extends Controller
{
    public function index(Request $request) {
        $data = [];
        $kelas = $request->user()->Kelas;
        if($request->req == 'table' && $request->tanggal_mulai && $request->tanggal_selesai) {
            $data = Siswa::where('id_tingkatan_kelas', $request->user()->kelas)
                        ->with('kelas')
                        ->orderBy('nama_lengkap')
                         ->with(['absensis' => function($q) use($request){
                             $q->where('tanggal', '>=', $request->tanggal_mulai)
                               ->where('tanggal', '<=', $request->tanggal_selesai);
                         }])->get();

            //return response()->json($data);
        }

        return view('guru.absensi.rekap-siswa', compact('data', 'kelas'));
    }
}
