<?php

namespace App\Http\Controllers\Siswa\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutSiswaController extends Controller
{
    public function index() {
        return view('siswa.logout.logout-siswa');
    }
}
