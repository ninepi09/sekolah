<?php

namespace App\Http\Controllers\Siswa\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumSiswaController extends Controller
{
    public function index() {
        return view('siswa.forum.forum-siswa');
    }
}
