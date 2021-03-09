<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Superadmin\Provinsi;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\KabupatenKota;

class KabupatenKotaController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = KabupatenKota::latest()->get();
            return DataTables::of($data)
                ->editColumn('provinsi_id', function (KabupatenKota $kabupatenKota) {
                    return $kabupatenKota->provinsi->name;
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

        return view('superadmin.referensi.kabupaten-kota', [
            'provinsis' => Provinsi::orderBy('name', 'asc')->get()
        ]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
           'provinsi_id'  => 'required',
           'kabupaten_kota'  => 'required|max:100',
       ];

       $message = [
           'provinsi.required' => 'Kolom ini gaboleh kosong',
           'kabupaten_kota.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       $kabupatenKota = KabupatenKota::create([
           'provinsi_id'    => $request->input('provinsi_id'),
           'name'           => $request->input('kabupaten_kota'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil ditambahkan.',
           ]);
    }

    public function edit($id) {
        $kabupatenKota = KabupatenKota::find($id);

        return response()
            ->json([
                'kabupatenKota' => $kabupatenKota,
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'provinsi_id'  => 'required',
           'kabupaten_kota'  => 'required|max:100',
       ];

       $message = [
           'provinsi.required' => 'Provinsi ini gaboleh kosong',
           'kabupaten_kota.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       KabupatenKota::whereId($request->input('hidden_id'))->update([
           'provinsi_id'    => $request->input('provinsi_id'),
           'name'           => $request->input('kabupaten_kota'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $kabupatenKota = KabupatenKota::find($id);
        $kabupatenKota->delete();
    }
}
