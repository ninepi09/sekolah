<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use App\Models\Superadmin\Suku;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class SukuController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Suku::latest()->get();
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

        return view('superadmin.referensi.suku');
    }

    public function store(Request $request) {
         // validasi
         $rules = [
            'suku'  => 'required|max:100',
        ];

        $message = [
            'suku.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $suku = Suku::create([
            'name'  => $request->input('suku'),
        ]);

        return response()
            ->json([
                'success' => 'Data berhasil ditambahkan.',
            ]);
    }

    public function edit($id) {
        $suku = Suku::find($id);

        return response()
            ->json([
                'suku'  => $suku
            ]);
    }

    public function update(Request $request) {
         // validasi
         $rules = [
            'suku'  => 'required|max:100',
        ];

        $message = [
            'suku.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        Suku::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('suku'),
        ]);

        return response()
            ->json([
                'success' => 'Data berhasil diupdate.',
            ]);
    }

    public function destroy($id) {
        $suku = Suku::find($id);
        $suku->delete();
    }
}
