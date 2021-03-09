<?php

namespace App\Http\Controllers\Orangtua\Absensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index() {
        return view('orangtua.absensi.absensi');
    }
}
