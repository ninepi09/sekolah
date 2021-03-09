<?php

namespace App\Http\Controllers\Superadmin\Library;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Superadmin\Library;
use App\Models\Superadmin\Sekolah;
use App\Http\Controllers\Controller;
use App\Models\Superadmin\Kategori;
use App\Models\Superadmin\Penerbit;
use App\Models\Superadmin\Penulis;
use App\Utils\CRUDResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TambahController extends Controller
{
    private $rules = [
        'name' => ['required'],
        'sekolah_id' => ['nullable', 'exists:sekolahs,id'],
        'tingkat' => ['nullable', 'in:SD,SMP,SMA,SMK,Umum'],
        'kategori_id' => ['nullable', 'exists:kategoris,id'],
        'tahun_terbit' => ['nullable', 'numeric'],
        'penulis_id' => ['nullable', 'exists:penulises,id'],
        'penerbit_id' => ['nullable', 'exists:penerbits,id'],
        'thumbnail' => ['nullable', 'mimes:jpeg,jpg,png', 'max:3000']
    ];

    public function index(Request $request) {
        if ($request->ajax()) {
            // datatable error
            // $data = Library::with(['penerbit', 'penulis'])->orderBy('name')->get();
            $data = Library::all();
            foreach($data as $d) {
                $penulis = Penulis::find($d['penulis_id']);
                $penerbit = Penerbit::find($d['penerbit_id']);
                $d['penulis'] = $penulis['name'] ?? '-';
                $d['penerbit'] = $penerbit['penerbit'] ?? '-';
                $d['deskripsi'] = $d['deskripsi'] ?? "-";
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data) {
                    $deleteUrl = route('superadmin.library.destroy', $data['id']);
                    // $button = '<button type="button" id="'.$data['id'].'" class="edit btn btn-mini btn-info shadow-sm" onclick="editBtnClicked(event);"><i class="fa fa-pencil-alt"></i></button>';
                    $button = '<a class="edit btn btn-mini btn-info shadow-sm" href=' . route('superadmin.library.edit', $data['id']) . '><i class="fa fa-pencil-alt"></i></a>';
                    $button .= "<button type='button' class='ml-2 delete btn btn-mini btn-danger shadow-sm' data-url='$deleteUrl' 
                                    data-toggle='modal' data-target='#confirmDeleteModal'><i class='fa fa-trash'></i></button>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('superadmin.library.tambah-baru', [
            'sekolahs'  => Sekolah::latest()->get(),
            'kategoris'     => Kategori::latest()->get(),
            'sekolahs'  => Sekolah::orderBy('name')->get(),
            'kategoris' => Kategori::orderBy('name')->get(),
            'penulises' => Penulis::orderBy('name')->get(),
            'penerbits' => Penerbit::orderBy('penerbit')->get()
        ]);
    }

    public function store(Request $req) {
        $data = $req->all();
        $validator = Validator::make($data, $this->rules);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->all())->withInput();
        }
    
        $data['thumbnail'] = null;
        if ($req->file('thumbnail')) {
            $data['thumbnail'] = $req->file('thumbnail')->store('libraries', 'public');
        }
        
        Library::create([
            'name' => $data['name'],
            'kategori_id' => $data['kategori_id'],
            'tahun_terbit' => $data['tahun_terbit'],
            'penulis_id' => $data['penulis_id'],
            'penerbit_id' => $data['penerbit_id'],
            'link_video' => $data['link_video'],
            'link_audio' => $data['link_audio'],
            'link_ebook' => $data['link_ebook'],
            'deskripsi' => $data['deskripsi'],
            'thumbnail' => $data['thumbnail']
        ]);

        return back()->with(CRUDResponse::successCreate("perpustakaan " . $data['name']));
    }
   
    public function edit($id) {
        $library = Library::findOrFail($id);
        return view('superadmin.library.tambah-baru_edit', [
            'library' => $library,
            'sekolahs'  => Sekolah::orderBy('name')->get(),
            'kategoris' => Kategori::orderBy('name')->get(),
            'penulises' => Penulis::orderBy('name')->get(),
            'penerbits' => Penerbit::orderBy('penerbit')->get()
        ]);
    }

    public function update($id, Request $req) {
        $data = $req->all();

        $validator = Validator::make($data, $this->rules);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->all())->withInput();
        }

        $library = Library::findOrFail($id);
        $data['thumbnail'] = null;
        if ($req->file('thumbnail')) {
            $data['thumbnail'] = $req->file('thumbnail')->store('libraries', 'public');
        }

        Library::whereId($id)->update([
            'name' => $data['name'],
            'kategori_id' => $data['kategori_id'],
            'tahun_terbit' => $data['tahun_terbit'],
            'penulis_id' => $data['penulis_id'],
            'penerbit_id' => $data['penerbit_id'],
            'link_video' => $data['link_video'],
            'link_audio' => $data['link_audio'],
            'link_ebook' => $data['link_ebook'],
            'deskripsi' => $data['deskripsi'],
            'thumbnail' => $data['thumbnail'] ?? $library->thumbnail
        ]);
        
        if ($req->file('thumbnail') && $library->thumbnail && Storage::disk('public')->exists($library->thumbnail)) {
            Storage::disk('public')->delete($library->thumbnail);
        }

        return redirect()->route('superadmin.library.index')->with(CRUDResponse::successUpdate("perpustakaan " . $library->name));
    }

    public function destroy($id) {
        $library = Library::findOrFail($id);
        $library->delete();
        if ($library->thumbnail && Storage::disk('public')->exists($library->thumbnail)) {
            Storage::disk('public')->delete($library->thumbnail);
        }

        return back()->with(CRUDResponse::successDelete("perpustakaan " . $library->name));
    }
}
