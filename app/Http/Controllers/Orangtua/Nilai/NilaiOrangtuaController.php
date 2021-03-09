<?php

namespace App\Http\Controllers\Orangtua\Nilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiOrangtuaController extends Controller
{
    public function index() {
        return view('orangtua.nilai.nilai-orangtua');
    }
}
