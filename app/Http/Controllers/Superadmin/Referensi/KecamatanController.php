<?php

namespace App\Http\Controllers\Superadmin\Referensi;

use Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\Kecamatan;
use App\Models\Superadmin\KabupatenKota;

class KecamatanController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Kecamatan::latest()->get();
            return DataTables::of($data)
                ->editColumn('kabupaten_kota_id', function (Kecamatan $kecamatan) {
                    return $kecamatan->kabupatenKota->name;
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

        return view('superadmin.referensi.kecamatan', [
            'kabupatenKotas' => KabupatenKota::orderBy('name', 'asc')->get()
        ]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
           'kabupaten_kota_id'  => 'required',
           'kecamatan'  => 'required|max:100',
       ];

       $message = [
           'kabupaten_kota_id.required' => 'Kolom ini gaboleh kosong',
           'kecamatan.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       $kecamatan = Kecamatan::create([
           'name'               => $request->input('kecamatan'),
           'kabupaten_kota_id'  => $request->input('kabupaten_kota_id'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil ditambahkan.',
           ]);
    }

    public function edit($id) {
        $kecamatan = Kecamatan::find($id);

        return response()
            ->json([
                'kecamatan' => $kecamatan
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
           'kabupaten_kota_id'  => 'required',
           'kecamatan'  => 'required|max:100',
       ];

       $message = [
           'kabupaten_kota_id.required' => 'Kolom ini gaboleh kosong',
           'kecamatan.required' => 'Kolom ini gaboleh kosong',
       ];

       $validator = Validator::make($request->all(), $rules, $message);

       if ($validator->fails()) {
           return response()
               ->json([
                   'errors' => $validator->errors()->all()
               ]);
       }

       Kecamatan::whereId($request->input('hidden_id'))->update([
           'name'               => $request->input('kecamatan'),
           'kabupaten_kota_id'  => $request->input('kabupaten_kota_id'),
       ]);

       return response()
           ->json([
               'success' => 'Data berhasil diupdate.',
           ]);
    }

    public function destroy($id) {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();
    }
}
