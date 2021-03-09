<?php

namespace App\Http\Controllers\Superadmin\Library;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\Tingkat;
use App\Utils\CRUDResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TingkatController extends Controller
{
    private $validationRules = [
        'name' => ['required']
    ];

    public function index()
    {
    }

    public function store(Request $req) {
        $data = $req->all();
        $validator = Validator::make($data, $this->validationRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("tingkat"));
        }

        Tingkat::create([
            'name' => $data['name']
        ]);

        return back()->with(CRUDResponse::successCreateNotif("tingkat " . $data['name']));
    }

    public function show($id) {
        $tingkat = Tingkat::find($id);
        return response()->json(['tingkat' => $tingkat]);
    }

    public function update($id, Request $req) {
        $data = $req->all();
        $tingkat = Tingkat::findOrFail($id);

        $validator = Validator::make($data, $this->validationRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->with(CRUDResponse::errorInputNotif("tingkat"));
        }

        $tingkat->name = $data['name'];
        $tingkat->save();

        return back()->with(CRUDResponse::successUpdateNotif("tingkat " . $data['name']));
    }

    public function destroy($id) {
        $tingkat = Tingkat::findOrFail($id);
        $tingkat->delete();

        return back()->with(CRUDResponse::successDeleteNotif("tingkat " . $tingkat->name));
    }
}
