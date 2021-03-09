<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\JenisKelamin;

class JenisKelaminController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = JenisKelamin::latest()->get();
            return DataTables::of($data)
                ->editColumn('name', function (JenisKelamin $jenisKelamin) {
                    return $jenisKelamin->name == 'L' ? 'Laki-Laki' : 'Perempuan';
                })
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" id="'.$data->id.'" class="edit btn btn-mini btn-info shadow-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data->id.'" class="delete btn btn-mini btn-danger shadow-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('superadmin.referensi.jenis-kelamin');
    }

    public function store(Request $request) {
         // validasi
         $rules = [
            'jenis_kelamin'  => 'required|max:100',
        ];

        $message = [
            'jenis_kelamin.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $jenisKelamin = JenisKelamin::create([
            'name'  => $request->input('jenis_kelamin'),
        ]);

        return response()
            ->json([
                'success' => 'Data berhasil ditambahkan.',
            ]);
    }

    public function edit($id) {
        $jeniskelamin = JenisKelamin::find($id);

        return response()
            ->json([
                'jeniskelamin' => $jeniskelamin
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'jenis_kelamin'  => 'required|max:100',
       ];

       $message = [
           'jenis_kelamin.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       JenisKelamin::whereId($request->input('hidden_id'))->update([
           'name'  => $request->input('jenis_kelamin'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $jenisKelamin = JenisKelamin::find($id);
        $jenisKelamin->delete();
    }
}
