<?php

namespace App\Http\Controllers\Siswa\Pelanggaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.pelanggaran.siswa');
    }
}
