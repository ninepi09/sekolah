<?php

namespace App\Http\Controllers\Orangtua\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index() {
        return view('orangtua.pengumuman.pengumuman');
    }
}
