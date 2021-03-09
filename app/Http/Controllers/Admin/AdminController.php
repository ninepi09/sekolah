<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', ['mySekolah' => User::sekolah()]);
    }
}
