<?php

namespace App\Http\Controllers\Siswa\Leaderboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderboardSiswaController extends Controller
{
    public function index() {
        return view('siswa.leaderboard.leaderboard-siswa');
    }
}
