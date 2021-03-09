<?php

namespace App\Http\Controllers\Admin\PesertaDidik;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PindahKelasController extends Controller
{
    public function index() {
        return view('admin.pesertadidik.pindah-kelas', ['mySekolah' => User::sekolah()]);
    }
}
