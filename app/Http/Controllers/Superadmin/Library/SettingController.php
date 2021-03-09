<?php

namespace App\Http\Controllers\Superadmin\Library;

use Illuminate\Http\Request;
use App\Models\Superadmin\Tipe;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\Kategori;
use App\Models\Superadmin\Penerbit;
use App\Models\Superadmin\Penulis;
use App\Models\Superadmin\Tingkat;

class SettingController extends Controller
{
    public function index() {
        return view('superadmin.library.setting', [
            'tipes'     => Tipe::orderBy('name')->get(),
            'kategoris' => Kategori::orderBy('name')->get(),
            'penulises' => Penulis::orderBy('name')->get(),
            'penerbits' => Penerbit::orderBy('penerbit')->get(),
            'tingkats' => Tingkat::orderBy('name')->get()
        ]);
    }

    public function tipeStore(Request $request) {
        // validasi
        $this->validate($request, [
            'tipe'    => 'required|max:100',
        ], [
            'tipe.required'  => 'kolom tidak boleh kososng'
        ]);

        Tipe::create([
            'name'   => $request->input('tipe'),
        ]);

        $notification = [
            'message' => '👍 '.$request->input('tipe').' berhasil ditambahkan', 
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function editTipe($id) {
        $tipe = Tipe::find($id);

        return response()
            ->json([
                'tipe'  => $tipe,
            ]);
    }

    public function updateTipe(Request $request) {
        // validasi
        $this->validate($request, [
            'tipe'    => 'required|max:100',
        ], [
            'tipe.required'  => 'kolom tidak boleh kososng'
        ]);

        Tipe::whereId($request->input('hidden_id'))->update([
            'name'   => $request->input('tipe'),
        ]);

        $notification = [
            'message' => '👍 '.$request->input('tipe').' berhasil diupdate', 
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function deleteTipe($id) {
        $tipe = Tipe::find($id);
        $tipe->delete();

        $notification = [
            'message' => '👍 berhasil dihapus', 
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }
}
