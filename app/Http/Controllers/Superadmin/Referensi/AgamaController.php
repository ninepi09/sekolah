<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use App\Models\Superadmin\Agama;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class AgamaController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Agama::latest()->get();
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

        return view('superadmin.referensi.agama');
    }

    public function store(Request $request) {
         // validasi
         $rules = [
            'agama'  => 'required|max:100',
        ];

        $message = [
            'agama.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $agama = Agama::create([
            'name'  => $request->input('agama'),
        ]);

        return response()
            ->json([
                'success' => 'Data berhasil ditambahkan.',
            ]);
    }

    public function edit($id) {
        $agama = Agama::find($id);

        return response()
            ->json([
                'agama' => $agama
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'agama'  => 'required|max:100',
       ];

       $message = [
           'agama.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       Agama::whereId($request->input('hidden_id'))->update([
           'name'  => $request->input('agama'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $agama = Agama::find($id);
        $agama->delete();
    }
}
