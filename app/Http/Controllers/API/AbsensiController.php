<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Models\Siswa;
use Illuminate\Support\Facades\Validator;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function read(Request $request) {
        if($request->req == 'table') {
            $data = Siswa::with(['kelas',
                                 'absensi' => function($q) use($request){
                                     $q->where('tanggal', $request->tanggal)
                                     ->where('kelas_id', $request->kelas_id);
                                }])
                         ->where('id_tingkatan_kelas', $request->kelas_id)
                         ->orderBy('nama_lengkap')
                        //  ->select('id', 'nama_lengkap', 'id_tingkatan_kelas')
                         ->get();

                         return ResponseFormatter::success($data);
        }

        elseif($request->req == 'rekap') {
            $data = Siswa::where('id_tingkatan_kelas', $request->kelas_id)
                        ->with('kelas')
                        ->orderBy('nama_lengkap')
                         ->with(['absensis' => function($q) use($request){
                             $q->where('tanggal', '>=', $request->tanggal_mulai)
                               ->where('tanggal', '<=', $request->tanggal_selesai);
                         }])
                        //  ->select('id', 'nama_lengkap', 'id_tingkatan_kelas')
                         ->get();

                         return ResponseFormatter::success($data);
        }
        elseif($request->req == 'siswa') {
            $data = Siswa::with('kelas')
                        ->orderBy('nama_lengkap')
                         ->with(['absensis' => function($q) use($request){
                             $q->where('tanggal', '>=', $request->tanggal_mulai)
                               ->where('tanggal', '<=', $request->tanggal_selesai);
                         }])
                        //  ->select('id', 'nama_lengkap', 'id_tingkatan_kelas')
                         ->find($request->siswa_id);

                         return ResponseFormatter::success($data);
        }

    }

    public function write(Request $request) {
        if($request->req == 'insert') {
            $validation = Validator::make($request->all(), [
                'tanggal' => 'required|date',
                'kelas_id' => 'required',
                'siswa_id' => 'required',
                'status' => 'required'
            ]);

            if($validation->fails()) {
                return ResponseFormatter::error($validation->messages(), 'Unprocessable Entity', 422);
            }

            $obj = Absensi::create([
                'kelas_id' => $request->kelas_id,
                'tanggal' => $request->tanggal,
                'siswa_id' => $request->siswa_id,
                'status' => $request->status,
                'editor_id' => $request->editor_id
            ]);

            return ResponseFormatter::success($obj);
        }

    }
}
