<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Superadmin\Provinsi;
use App\Http\Controllers\Controller;

class ProvinsiController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Provinsi::latest()->get();
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

        return view('superadmin.referensi.provinsi');
    }

    public function store(Request $request) {
        // validasi
        $rules = [
           'provinsi'  => 'required|max:100',
       ];

       $message = [
           'provinsi.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       $provinsi = Provinsi::create([
           'name'  => $request->input('provinsi'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil ditambahkan.',
           ]);
    }

    public function edit($id) {
        $provinsi = Provinsi::find($id);

        return response()
            ->json([
                'provinsi'  => $provinsi
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'provinsi'  => 'required|max:100',
       ];

       $message = [
           'provinsi.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       Provinsi::whereId($request->input('hidden_id'))->update([
           'name'  => $request->input('provinsi'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
    }
}
