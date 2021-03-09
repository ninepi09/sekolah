@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Peserta Didik | Alumni')
@section('title-2', 'Alumni')
@section('title-3', 'Alumni')

@section('describ')
    Ini adalah halaman alumni untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pesertadidik.alumni') }}
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
                                        <th>NIS</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    <tr>
                                        <td>692.18</td>
                                        <td>Audiva Umbara</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Rantang Gg. Muslie No. 29 C</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>693.18</td>
                                        <td>Chintya Khairina</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Bakti Luhur Gg. Tirto No. 109 B</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>694.18</td>
                                        <td>Devita Sari</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Klambir Lima No. 58 A Medan</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>704.18</td>
                                        <td>Nurul Aisyiah</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Ayahanda No. 55</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>703.18</td>
                                        <td>Nisa Hariyanti</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Setia Budi Tj. Sari Psr I Gg. Sejahtera</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>702.18</td>
                                        <td>Marliana Wati</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Merpati Gg. Gintara No. 2</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>701.18</td>
                                        <td>Kinanti Adella</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Mega No. 4</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>700.18</td>
                                        <td>Juliani</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Notes Gg. Pribadi No.15</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>699.18</td>
                                        <td>Intan Permata Sari</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Sri Gunting Blok V No. 31 A</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>698.18</td>
                                        <td>Hasbiyana Haudy Nst</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Sei Deli No. 121</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>697.18</td>
                                        <td>Fitria Widyanti</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Binjai Km. 10,8 Jl. Sekolah No. 5</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>696.18</td>
                                        <td>Dira Annisa Putri</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Danau Poso No. 25 A</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>695.18</td>
                                        <td>Dina Nurdiana</td>
                                        <td>X OTKP</td>
                                        <td>Perempuan</td>
                                        <td>Jl. Danau Singkarak Gg. Mesjid</td>
                                        <td>
                                            <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
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