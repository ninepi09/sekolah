<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\ApiResponse;
use App\Models\Admin\Pemilihan;
use App\Models\Admin\Posisi;
use App\Models\Admin\Voting;

class VotingController extends Controller
{
    public function index(Request $req) {
        $voting = Pemilihan::query();
        $sekolahId = $req->query('sekolah_id');
        $posisi = $req->query('posisi');
        // $voting->when($sekolahId, function($query) use ($sekolahId) {
        //     return $query->where('sekolah_id', $sekolahId);
        // });
        $voting->when($posisi, function($query) use ($posisi) {
            return $query->where('posisi', $posisi);
        });
        $voting = $voting->whereRaw("CURRENT_DATE BETWEEN start_date AND end_date")->orderBy('name')->get();

        return response()->json(ApiResponse::success($voting));
    }

    public function posisiKandidat(Request $req) {
        $kandidats = Posisi::query();
        $sekolahId = $req->query('sekolah_id');
        // $voting->get($sekolahId, function($query) use ($sekolahId) {
        //     return $query->where('sekolah_id', $sekolahId);
        // });
        $kandidats = $kandidats->orderBy('name')->get();
        return response()->json(ApiResponse::success($kandidats));
    }

    public function store(Request $req) {
        $data = $req->all();

        $exist = Voting::where([
            ['calon_kandidat_id', $data['calon_kandidat_id']],
            ['id_user', $data['user_id']]
        ])->exists();

        if ($exist) {
            return response()->json(ApiResponse::error('Anda sudah pernah voting kandidat ini'));
        }

        Voting::create([
            'calon_kandidat_id' => $data['calon_kandidat_id'],
            'id_user' => $data['user_id']
        ]);

        return response()->json(ApiResponse::success([], "Berhasil vote"));
    }
}