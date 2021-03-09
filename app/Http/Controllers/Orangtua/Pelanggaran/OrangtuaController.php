<?php

namespace App\Http\Controllers\Orangtua\Pelanggaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index() {
        return view('orangtua.pelanggaran.orangtua');
    }
}
