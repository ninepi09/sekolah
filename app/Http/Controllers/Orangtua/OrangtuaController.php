<?php

namespace App\Http\Controllers\Orangtua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index() {
        return view('orangtua.index');
    }
}
