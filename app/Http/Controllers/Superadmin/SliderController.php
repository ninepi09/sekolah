<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request){
    	return view('superadmin.slider');
    }
}
