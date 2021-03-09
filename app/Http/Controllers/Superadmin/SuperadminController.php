<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\SiswaOrangTua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperadminController extends Controller
{
    public function index() {
        $siswa = Siswa::count();
        $guru = Guru::count();
        $orangtua = SiswaOrangTua::count();

        $siswasByTahun = Siswa::groupBy('tahun')->get(DB::raw("YEAR(tanggal_masuk) AS tahun, COUNT(*) AS total"));

        return view('superadmin.index', [
            'siswa' => $siswa,
            'guru' => $guru,
            'orangtua' => $orangtua,
            'siswasByTahun' => $siswasByTahun
        ]);
    }
}
