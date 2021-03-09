<?php

namespace App\Http\Controllers\Superadmin\Library;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\Penerbit;
use App\Utils\CRUDResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenerbitController extends Controller
{
    private $validationRules = [
        'penerbit' => ['required', 'min:3'],
    ];

    public function index()
    {
    }

    public function store(Request $req) {
        $data = $req->all();
        $validator = Validator::make($data, $this->validationRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("penerbit"));
        }

        Penerbit::create([
            'penerbit' => $data['penerbit']
        ]);

        return back()->with(CRUDResponse::successCreateNotif("penerbit " . $data['penerbit']));
    }

    public function show($id) {
        $penerbit = Penerbit::find($id);
        return response()->json(['penerbit' => $penerbit]);
    }

    public function update($id, Request $req) {
        $data = $req->all();
        Penerbit::findOrFail($id);

        $validator = Validator::make($data, $this->validationRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("penerbit"));
        }

        Penerbit::whereId($id)->update([
            'penerbit' => $data['penerbit']
        ]);

        return back()->with(CRUDResponse::successUpdateNotif("penerbit " . $data['penerbit']));
    }

    public function destroy($id) {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();

        return back()->with(CRUDResponse::successDeleteNotif("penerbit " . $penerbit->penerbit));
    }
}
