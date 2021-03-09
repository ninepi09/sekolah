<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\Library;
use App\Models\TingkatanKelas;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{

    public function index(Request $req) {
        $kelases = TingkatanKelas::query();
        
        $sekolahId = $req->query('sekolah_id');
        // $kelases->when($sekolahId, function($query) use ($sekolahId) {
        //     return $query->where('sekolah_id', $sekolahId);                
        // });

        return response()->json(ApiResponse::success($kelases->get()));
    }
}
