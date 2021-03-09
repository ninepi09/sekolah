<?php

namespace App\Http\Controllers\Siswa\EVoting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EVotingController extends Controller
{
    public function index() {
        return view('siswa.e-voting.e-voting');
    }
}
