<?php

namespace App\Http\Controllers\Siswa\Nilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function index() {
        return view('siswa.nilai.nilai-siswa');
    }
}
