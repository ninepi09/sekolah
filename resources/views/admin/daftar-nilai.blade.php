@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Daftar Nilai | Daftar Nilai')
@section('title-2', 'Daftar Nilai')
@section('title-3', 'Daftar Nilai')

@section('describ')
    Ini adalah halaman Daftar Nilai untuk admin
@endsection

@section('icon-l', 'fa fa-medal')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.daftar-nilai') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="card-block">
                        <h6>Filter</h6>
                        <form action="">
                            <div class="row">
                                <div class="col-xl-2">
                                    <select name="pilih" id="pilih" class="form-control form-control-sm">
                                        <option value="">-- Kelas --</option>
                                        <option value="X TKJ">X TKJ</option>
                                        <option value="X OTKP">X OTKP</option>
                                        <option value="X MM">X MM</option>
                                        <option value="XI TKJ">XI TKJ</option>
                                        <option value="XI OTKP">XI OTKP</option>
                                        <option value="XI MM">XI MM</option>
                                        <option value="XII TKJ">XII TKJ</option>
                                        <option value="XII OTKP">XII OTKP</option>
                                        <option value="XII MM">XII MM</option>
                                    </select>
                                </div>
                                <div class="col-xl-2">
                                    <select name="pilih" id="pilih" class="form-control form-control-sm">
                                        <option value="">-- Pelajaran --</option>
                                        <!-- <option value="X TKJ">X TKJ</option>
                                        <option value="X OTKP">X OTKP</option>
                                        <option value="X MM">X MM</option>
                                        <option value="XI TKJ">XI TKJ</option>
                                        <option value="XI OTKP">XI OTKP</option>
                                        <option value="XI MM">XI MM</option>
                                        <option value="XII TKJ">XII TKJ</option>
                                        <option value="XII OTKP">XII OTKP</option>
                                        <option value="XII MM">XII MM</option> -->
                                    </select>
                                </div>
                                <div class="col-xl-2">
                                    <select name="pilih" id="pilih" class="form-control form-control-sm">
                                        <option value="">-- Tahun Ajaran --</option>
                                        <!-- <option value="X TKJ">X TKJ</option>
                                        <option value="X OTKP">X OTKP</option>
                                        <option value="X MM">X MM</option>
                                        <option value="XI TKJ">XI TKJ</option>
                                        <option value="XI OTKP">XI OTKP</option>
                                        <option value="XI MM">XI MM</option>
                                        <option value="XII TKJ">XII TKJ</option>
                                        <option value="XII OTKP">XII OTKP</option>
                                        <option value="XII MM">XII MM</option> -->
                                    </select>
                                </div>
                                <div class="col-xl-2">
                                    <select name="pilih" id="pilih" class="form-control form-control-sm">
                                        <option value="">-- Semester --</option>
                                        <option value="ganjil">Ganjil</option>
                                        <option value="genap">Genap</option>
                                    </select>
                                </div>
                                <div class="col-xl-2">
                                    <select name="pilih" id="pilih" class="form-control form-control-sm">
                                        <option value="">-- Kategori Nilai --</option>
                                        <option value="uh">UH</option>
                                        <option value="uts">UTS</option>
                                        <option value="uas">UAS</option>
                                        <option value="tugas">Tugas Harian</option>
                                        <option value="praktek">Praktek</option>
                                    </select>
                                </div>
                                <div class="col-xl-2">
                                    <input type="submit" value="Pilih" class="btn btn-block btn-sm btn-primary shadow-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th style="vertical-align: middle">Nama Siswa</th>
                                        <th style="vertical-align: middle">Pelajaran</th>
                                        <th style="vertical-align: middle">Guru</th>
                                        <th style="width: 15%">UH 1 
                                            <button id="add" class="btn btn-outline-primary btn-sm shadow-sm"><i class="fa fa-plus"></i></button>
                                        </th>
                                        <th style="vertical-align: middle">NR</th>
                                        <th style="vertical-align: middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection