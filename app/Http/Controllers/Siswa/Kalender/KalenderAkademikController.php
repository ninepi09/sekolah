<?php

namespace App\Http\Controllers\Siswa\Kalender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KalenderAkademikController extends Controller
{
    public function index() {
        return view('siswa.kalender.kalender-akademik');
    }
}
