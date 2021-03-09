<?php

namespace App\Http\Controllers\Guru\Absensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TingkatanKelas;
use App\Models\Siswa;
use App\Models\Absensi;

class SiswaGuruController extends Controller
{
    public function index(Request $request) {
        
        $kelas = $request->user()->Kelas;
        $tanggal = $request->tanggal ?? date('Y-m-d');
        
        $data = Siswa::with(['kelas',
                                'absensi' => function($q) use($request, $tanggal){
                                    $q->where('tanggal', $tanggal)
                                    ->where('kelas_id', $request->user()->kelas);
                            }])
                        ->where('id_tingkatan_kelas', $request->user()->kelas)
                        ->orderBy('nama_lengkap')
                        ->get();        

        return view('guru.absensi.siswa', compact('kelas', 'data', 'tanggal'));
    }

    public function write(Request $request) {
        if($request->req == 'write') {
            $this->validate($request, [
                'tanggal' => 'required|date',
                'kelas_id' => 'required',
                'siswa_id' => 'required',
                'status' => 'required'
            ]);

            $obj = Absensi::create([
                'kelas_id' => $request->kelas_id,
                'tanggal' => $request->tanggal,
                'siswa_id' => $request->siswa_id,
                'status' => $request->status,
                'editor_id' => $request->user()->id
            ]);

            return response()->json($obj);
        }
    }
}
