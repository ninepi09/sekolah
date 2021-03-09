<?php

namespace App\Http\Controllers\Admin\EVoting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\CalonKandidat;
use App\User;
use Illuminate\Support\Facades\Auth;

class CalonController extends Controller
{
    public function index(Request $request) {
        $tes = User::get('id_sekolah');
        if ($request->ajax()) {
            $data = CalonKandidat::latest()->get();
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
        return view('admin.e-voting.calon', ['tes' => $tes, 'mySekolah' => User::sekolah()]);
    }

    public function store(Request $request) {
        $data = $request->all();

        // validasi
        $rules = [
            'nama_calon'  => 'required|max:50',
        ];

        $message = [
            'nama_calon.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }


        $status = CalonKandidat::create([
            'name'  => $request->input('nama_calon'),
            'user_id' => $request->input('user_id')
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $tingkat = CalonKandidat::find($id);

        return response()
            ->json([
                'nama_calon'  => $tingkat
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'nama_calon'  => 'required|max:50',
        ];

        $message = [
            'nama_calon.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = CalonKandidat::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('nama_calon'),
            'user_id' => $request->input('user_id')
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $tingkat = CalonKandidat::find($id);
        $tingkat->delete();
    }

}
