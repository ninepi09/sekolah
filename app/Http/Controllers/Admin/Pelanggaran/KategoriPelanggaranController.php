<?php

namespace App\Http\Controllers\Admin\Pelanggaran;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\Pelanggaran;
use App\User;

class KategoriPelanggaranController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Pelanggaran::latest()->get();
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
        
        return view('admin.pelanggaran.kategori-pelanggaran', ['mySekolah' => User::sekolah()]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'kategori'  => 'required|max:50',
        ];

        $message = [
            'kategori.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Pelanggaran::create([
            'name'  => $request->input('kategori'),
            'poin'  => $request->input('poin'),
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $kategori = Pelanggaran::find($id);
        $poin = Pelanggaran::find($id);

        return response()
            ->json([
                'kategori'  => $kategori,
                'poin'      => $poin
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'kategori'  => 'required|max:50',
            'poin' => 'required|max:50'
        ];

        $message = [
            'kategori.required' => 'Kolom ini gaboleh kosong',
            'poin.required' => 'Kolom ini gaboleh kosong'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Pelanggaran::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('kategori'),
            'poin'  => $request->input('poin'),
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $kategori = Pelanggaran::find($id);
        $kategori->delete();
    }
}
