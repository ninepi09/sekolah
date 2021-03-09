@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Leaderboard | Leaderboard Siswa')
@section('title-2', 'Leaderboard Siswa')
@section('title-3', 'Leaderboard Siswa')

@section('describ')
    Ini adalah halaman Leaderboard untuk siswa
@endsection

@section('icon-l', 'fa fa-crown')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.leaderboard.leaderboard-siswa') }}
@endsection

{{-- main content --}}
@section('content')
<!-- {{-- testimonial and top selling start --}} -->
<div class="row">
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Leaderboard</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                        <li><i class="icon-trash close-card"></i></li>
                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block p-b-0">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>
                                <th width= 15%>Minggu Ini</th>
                                <th width= 15%>Minggu Lalu</th>
                                <th width= 25%>Nama</th>
                                <th width= 15%>E-Book</th>
                                <th width= 15%>Audio Book</th>
                                <th width= 15%>Video Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Medan</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Brandan Barat</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Babalan</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 60 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMA N 1 Besitang</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 20 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                            <tr>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>SMK YPT Maju</td>
                                <td>{{ rand(10,1000) }}</td>
                                <td>{{ 30 }}</td>
                                <td>{{ 60 }}</td>
                            </tr>
                        </tbody>
                    </table>
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