<?php

namespace App\Http\Controllers\Admin\DaftarNilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DaftarNilaiController extends Controller
{
    public function index() {
        return view('admin.daftar-nilai', ['mySekolah' => User::sekolah()]);
    }
}
