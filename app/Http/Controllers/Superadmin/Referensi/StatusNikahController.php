<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\StatusNikah;

class StatusNikahController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = StatusNikah::latest()->get();
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

        return view('superadmin.referensi.status-nikah');
    }

    public function store(Request $request) {
        // validasi
        $rules = [
           'status_nikah'  => 'required|max:100',
       ];

       $message = [
           'status_nikah.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       $statusNikah = StatusNikah::create([
           'name'  => $request->input('status_nikah'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil ditambahkan.',
           ]);
    }

    public function edit($id) {
        $statusNikah = StatusNikah::find($id);

        return response()
            ->json([
                'statusNikah'   => $statusNikah
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'status_nikah'  => 'required|max:100',
       ];

       $message = [
           'status_nikah.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       StatusNikah::whereId($request->input('hidden_id'))->update([
           'name'  => $request->input('status_nikah'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $statusNikah = StatusNikah::find($id);
        $statusNikah->delete();
    }
}
