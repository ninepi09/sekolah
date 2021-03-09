<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Guru;
use App\User;

class TestController extends Controller
{
    public function __invoke(Request $request) {
        
        $data = Guru::with('pegawai.akun')->where('pegawai_id', 5)->firstOrFail();

        return response()->json($data);
    }
}
