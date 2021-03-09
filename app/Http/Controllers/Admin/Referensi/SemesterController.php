<?php

namespace App\Http\Controllers\Admin\Referensi;

use Validator;
use App\Models\Semester;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class SemesterController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Semester::where('user_id', Auth::id())->latest()->get();
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

        return view('admin.referensi.semester', ['mySekolah' => User::sekolah()]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'semester'  => 'required|max:100',
        ];

        $message = [
            'semester.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $semester = Semester::create([
            'name'  => $request->input('semester'),
            'user_id' => Auth::id()
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $semester = Semester::find($id);

        return response()
            ->json([
                'semester'  => $semester
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'semester'  => 'required|max:100',
        ];

        $message = [
            'semester.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $semester = Semester::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('semester'),
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $semester = Semester::find($id);
        $semester->delete();
    }
}
