<?php

namespace App\Http\Controllers\Orangtua\Kalender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KalenderAkademikController extends Controller
{
    public function index() {
        return view('orangtua.kalender.kalender-akademik');
    }
}
