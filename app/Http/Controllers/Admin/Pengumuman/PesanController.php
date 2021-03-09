<?php

namespace App\Http\Controllers\Admin\Pengumuman;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index() {
        return view('admin.pengumuman.pesan', ['mySekolah' => User::sekolah()]);
    }
}
