<?php

namespace App\Http\Controllers\Admin\Referensi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PengaturanHakAksesController extends Controller
{
    public function index() {
        return view('admin.referensi.pengaturan-hak-akses', ['mySekolah' => User::sekolah()]);
    }
}
