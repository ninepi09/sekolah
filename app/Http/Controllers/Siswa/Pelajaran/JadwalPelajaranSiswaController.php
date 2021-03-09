<?php

namespace App\Http\Controllers\Siswa\Pelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\MataPelajaran;
use App\Models\TingkatanKelas;

class JadwalPelajaranSiswaController extends Controller
{

    public function index(Request $request) {
        $user = (object)[
            'kelas' => $request->user()->kelas ?? 1,
            'semester' => $request->user()->semester ?? 'ganjil',
            'tahun_ajaran' => '2019/2020'
        ];        
        
        $data = JadwalPelajaran::with('mataPelajaran')
                                ->where('tahun_ajaran', $user->tahun_ajaran)
                                ->where('kelas_id', $user->kelas)
                                ->where('semester', $user->semester)
                                ->orderBy('jam_pelajaran')
                                ->get();

        $data = $data->groupBy('hari');

        $tahun_ajaran = ['2019/2020', '2020/2021'];
        $kelas = TingkatanKelas::all();        
        
        return view('siswa.pelajaran.jadwal-pelajaran', compact('kelas', 'tahun_ajaran', 'data', 'user'));
    }
}
