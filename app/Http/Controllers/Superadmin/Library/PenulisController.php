<?php

namespace App\Http\Controllers\Superadmin\Library;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\Penulis;
use App\Utils\CRUDResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenulisController extends Controller
{
    public function index()
    {
    }

    public function store(Request $req) {
        $data = $req->all();
        $validator = Validator::make($data, [
            'name' => ['required', 'min:3']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("penulis"));
        }

        Penulis::create(['name' => $data['name']]);

        return back()->with(CRUDResponse::successCreateNotif("penulis " . $data['name']));
    }

    public function show($id) {
        $penulis = Penulis::find($id);
        return response()->json(['penulis' => $penulis]);
    }

    public function update($id, Request $req) {
        $data = $req->all();
        $penulis = Penulis::findOrFail($id);

        $validator = Validator::make($data, [
            'name' => ['required', 'min:3']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("penulis"));
        }

        $penulis->name = $data['name'];
        $penulis->save();

        return back()->with(CRUDResponse::successUpdateNotif("penulis " . $data['name']));
    }

    public function destroy($id) {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return back()->with(CRUDResponse::successDeleteNotif("penulis " . $penulis->name));
    }
}
