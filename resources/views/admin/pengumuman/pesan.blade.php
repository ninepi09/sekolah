@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Pengumuman | Pesan')
@section('title-2', 'Pesan')
@section('title-3', 'Pesan')

@section('describ')
    Ini adalah halaman pesan untuk admin
@endsection

@section('icon-l', 'icon-bell')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pengumuman.pengumuman') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Set Waktu</th>
                                        <th>Tanggal Upload</th>
                                        <th>Tampil Pada</th>
                                        <th>Status</th>
                                        <th>Actions</th>
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

    {{-- Modal --}}
    @include('admin.pengumuman.modals._pesan')
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datedropper/css/datedropper.min.css') }}" />
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datedropper/js/datedropper.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#order-table').DataTable();

            $('#add').on('click', function () {
                $('#modal-pesan').modal('show');
            });

            $('#start_date').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });

            $('#end_date').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });
        });
    </script>
@endpush