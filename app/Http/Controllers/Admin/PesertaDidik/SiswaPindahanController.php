<?php

namespace App\Http\Controllers\Admin\PesertaDidik;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class SiswaPindahanController extends Controller
{
    public function index() {
        return view('admin.pesertadidik.siswa-pindahan', ['mySekolah' => User::sekolah()]);
    }
}
