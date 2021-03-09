<?php

namespace App\Http\Controllers\Admin\EVoting;

use Validator;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\Admin\Pemilihan;
use App\Models\Admin\Voting;

class VoteController extends Controller
{
    public function index(Request $request) {
    	$names = Pemilihan::all();
    	$no = 1;
        return view('admin.e-voting.vote', ['names' => $names, 'no' => $no, 'mySekolah' => User::sekolah()]);
    } 
     
    public function store(Request $request) {
        // validasi
        dd('ok');
        $rules = [
            'calon_kandidat_id'  => 'required|max:50',
        ];

        $message = [
            'calon_kandidat_id.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Voting::make($request->all(), $rules, $message);
        dd($request->all());
        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Voting::create([
            'calon_kandidat_id'  => $request->input('calon_kandidat_id'),
            'id_user'  => $request->input('id_user')
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

}