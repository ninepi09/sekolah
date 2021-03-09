<?php

namespace App\Http\Controllers\Admin\EVoting;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\Pemilihan;
use App\Models\Admin\CalonKandidat;
use App\Models\Admin\Posisi;
use App\User;

class PemilihanController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Pemilihan::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" id="'.$data->id.'" class="edit btn btn-mini btn-info shadow-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data->id.'" class="delete btn btn-mini btn-danger shadow-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $ck = CalonKandidat::all();
        $ps = Posisi::all();
        return view('admin.e-voting.pemilihan', ['ck' => $ck, 'ps' => $ps, 'mySekolah' => User::sekolah()]);
    }



    public function store(Request $request) {
        $data = $request->all();
        // validasi
        $rules = [
            'nama_calon'  => 'required|max:50',
        ];

        $message = [
            'nama_calon.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($data, $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }


        foreach ($request->input('nama_calon') as $nama_calon) {
            $tglMulai = explode("-", $data['tanggal_mulai']);
            $tglSelesai = explode("-", $data['tanggal_selesai']);
            $newTglMulai = $tglMulai[2] . "-" . $tglMulai[1] . "-" . $tglMulai[0];
            $newTglSelesai = $tglSelesai[2] . "-" . $tglSelesai[1] . "-" . $tglSelesai[0];
            Pemilihan::create([
                'name'          => $nama_calon,
                'posisi'        => $data['posisi'],
                'start_date'    => $newTglMulai,
                'end_date'      => $newTglSelesai
            ]);
        }
        

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $data = Pemilihan::find($id);
        return response()
            ->json([
                'name'          => $data['name'],
                'posisi'        => $data['posisi'],
                'start_date'    => $data['start_date'] ?? "",
                'end_date'      => $data['end_date'] ?? "",
            ]);
    }

    public function update(Request $request) {
        $data = $request->all();
        // validasi
        $rules = [
            'nama_calon'  => 'required|max:50',
        ];

        $message = [
            'nama_calon.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $tglMulai = explode("-", $data['tanggal_mulai']);
        $tglSelesai = explode("-", $data['tanggal_selesai']);
        $newTglMulai = $tglMulai[2] . "-" . $tglMulai[1] . "-" . $tglMulai[0];
        $newTglSelesai = $tglSelesai[2] . "-" . $tglSelesai[1] . "-" . $tglSelesai[0];

        $status = Pemilihan::whereId($request->input('hidden_id'))->update([
            'name'          => $request->input('nama_calon'),
            'posisi'        => $request->input('posisi'),
            'start_date'    => $newTglMulai,
            'end_date'      => $newTglSelesai
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $sanksi = Pemilihan::find($id);
        $sanksi->delete();
    }

}