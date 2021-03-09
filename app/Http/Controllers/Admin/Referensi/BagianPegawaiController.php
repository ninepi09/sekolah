<?php

namespace App\Http\Controllers\Admin\Referensi;

use Validator;
use App\Models\BagianPegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class BagianPegawaiController extends Controller
{
    public function index(Request $request) {
        $tes = User::get('id_sekolah');
        if ($request->ajax()) {
            $data = BagianPegawai::where('user_id', Auth::id())->latest()->get();
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

        return view('admin.referensi.bagian-pegawai', ['tes' => $tes, 'mySekolah' => User::sekolah()]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'pegawai'  => 'required|max:100',
        ];

        $message = [
            'pegawai.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $pegawai = BagianPegawai::create([
            'name'  => $request->input('pegawai'),
            'user_id' => Auth::id()
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $pegawai = BagianPegawai::find($id);

        return response()
            ->json([
                'pegawai'   => $pegawai
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'pegawai'  => 'required|max:100',
        ];

        $message = [
            'pegawai.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        BagianPegawai::whereId($request->hidden_id)->update([
            'name'  => $request->input('pegawai'),
        ]);

        return response()
            ->json([
                'success'   => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $pegawai = BagianPegawai::find($id);
        $pegawai->delete();
    }
}
