<?php

namespace App\Http\Controllers\Siswa\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElearningSiswaController extends Controller
{
    public function index() {
        return view('siswa.elearning.elearning-siswa');
    }
}
