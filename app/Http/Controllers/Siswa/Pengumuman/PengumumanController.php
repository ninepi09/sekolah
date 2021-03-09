<?php

namespace App\Http\Controllers\Siswa\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index() {
        return view('siswa.pengumuman.pengumuman');
    }
}
