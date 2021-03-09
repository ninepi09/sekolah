@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Peserta Didik | Pengaturan Siswa Per Kelas')
@section('title-2', 'Pengaturan Siswa Per Kelas')
@section('title-3', 'Pengaturan Siswa Per Kelas')

@section('describ')
    Ini adalah halaman pengaturan siswa per kelas untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pesertadidik.pengaturan-siswa-per-kelas') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="card-block">
                        <h6>Pilih Kelas</h6>
                        <form action="">
                            <div class="row">
                                <div class="col-xl-10">
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
                                        <th>NIS</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Keterangan</th>
                                        <th>Kelas Tujuan</th>
                                        <th>Action</th>
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

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#order-table').DataTable();
        });
    </script>
@endpush