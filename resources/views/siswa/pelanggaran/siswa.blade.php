@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Pelanggaran | Pelanggaran Siswa')
@section('title-2', 'Pelanggaran Siswa')
@section('title-3', 'Pelanggaran Siswa')

@section('describ')
    Ini adalah halaman pelanggaran untuk siswa
@endsection

@section('icon-l', 'fa fa-exclamation-triangle')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pesertadidik.siswa-pindahan') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th width= 2%>No</th>
                                        <th width= 34%>Pelanggaran</th>
                                        <th width= 15%>Tanggal</th>
                                        <th width= 15%>Point</th>
                                        <th width= 34%>Sanksi</th>
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
    @include('admin.pelanggaran.modals._siswa')
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
                $('#modal-siswa').modal('show');
            });

            $('#tanggal_pelanggaran').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });
        });
    </script>
@endpush