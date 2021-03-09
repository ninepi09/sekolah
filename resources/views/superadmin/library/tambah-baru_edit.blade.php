@extends('layouts.superadmin')

@section('title', 'Library')
@section('title-2', 'Library')
@section('title-3', 'Library')
@section('describ')
    Ini adalah halaman library untuk superadmin
@endsection
@section('icon-l', 'icon-book-open')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('superadmin.library.index') }}
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Edit Library {{ $library->name }}</h5>
            </div>
            <div class="card-body">
                <form id="form-library" method="POST" action="{{ route('superadmin.library.update', $library->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="name">Judul:</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Judul" value="{{ $library->name }}" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="kategori_id">Kategori:</label>
                                <select name="kategori_id" id="kategori_id" class="form-control form-control-sm" autocomplete="off">
                                    <option value="">-- Kategori --</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ $library->kategori_id == $kategori->id ? "selected" : "" }}>{{ $kategori->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit:</label>
                                <select name="tahun_terbit" id="tahun_terbit" class="form-control form-control-sm" autocomplete="off">
                                    <option value="">-- Tahun Terbit --</option>
                                    @for ($year = 1975; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}" {{ $library->tahun_terbit == $year ? 'selected' : date('Y') }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" cols="10" rows="3" class="form-control form-control-sm" placeholder="Deskripsi">{{ $library->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="thumbnail" class="mt-1">
                                            Thumbnail:
                                            <br>
                                            <small class="text-muted">hanya jika update</small>
                                            <br>
                                            <small class="text-muted">max. 3MB</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <input type="file" class="form-control form-control-sm" name="thumbnail" id="thumbnail" accept="image/*" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_video" class="mt-1">URL Video:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-video-camera"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_video" id="link_video" value="{{ $library->link_video }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_audio" class="mt-1">URL Audio:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_audio" id="link_audio" value="{{ $library->link_audio }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_ebook" class="mt-1">URL E-Book:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-book"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_ebook" id="link_ebook" value="{{ $library->link_ebook }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="penulis_id">Penulis:</label>
                                <select name="penulis_id" id="penulis_id" class="form-control form-control-sm" autocomplete="off">
                                    <option value="">-- Penulis --</option>
                                    @foreach($penulises as $penulis)
                                        <option value="{{ $penulis->id }}"{{ $library->penulis_id == $penulis->id ? "selected" : "" }}>{{ $penulis->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="penerbit_id">Penerbit:</label>
                                <select name="penerbit_id" id="penerbit_id" class="form-control form-control-sm" autocomplete="off">
                                    <option value="">-- Penerbit --</option>
                                    @foreach($penerbits as $penerbit)
                                        <option value="{{ $penerbit->id }}" {{ $library->penerbit_id == $penerbit->id ? "selected" : "" }}>{{ $penerbit->penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-outline-success">Ubah</button>                          
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
        });
    </script>
@endpush