<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin\Siswa;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelanggaranController extends Controller
{
    public function index(Request $req) {
        $pelanggarans = Siswa::query();
        
        $userId = $req->query('user_id');
        // $kelases->when($sekolahId, function($query) use ($sekolahId) {
        //     return $query->where('sekolah_id', $sekolahId);                
        // });

        return response()->json(ApiResponse::success($pelanggarans->get()));
    }
}
