<?php

namespace App\Http\Controllers\Siswa\Cbt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CbtSiswaController extends Controller
{
    public function index() {
        return view('siswa.cbt.cbt-siswa');
    }
}
