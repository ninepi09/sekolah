<?php

namespace App\Http\Controllers\Siswa\Perpustakaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index() {
        return view('siswa.perpustakaan.perpustakaan');
    }
}
