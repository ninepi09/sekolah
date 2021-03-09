@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Fungsionaris | Pegawai')
@section('title-2', 'Pegawai')
@section('title-3', 'Pegawai')

@section('describ')
    Ini adalah halaman pegawai untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.fungsionaris.pegawai.index') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                        <div class="dt-responsive table-responsive">
                            <table id="pegawai-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>No. HP</th>
                                        <th>Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    @forelse($pegawais as $pegawai)
                                        <tr>
                                            <td>{{ $pegawai->nip }}</td>
                                            <td>{{ $pegawai->name }}</td>
                                            <td>{{ $pegawai->no_telepon }}</td>
                                            <td>{{ $pegawai->alamat_tinggal }}</td>
                                            <td>
                                                <a class="btn btn-mini btn-info shadow-sm" href="{{ route('admin.fungsionaris.pegawai.edit', $pegawai->id) }}"><i class="fa fa-pencil-alt"></i></a>
                                                &nbsp;&nbsp;
                                                <button type="button" class="btn btn-mini btn-danger shadow-sm"
                                                    data-url="{{ route('admin.fungsionaris.pegawai.destroy', $pegawai->id) }}"
                                                    data-toggle="modal" data-target="#confirmDeleteModal">
                                                        <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="5" class="text-center">Tidak ada data</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    @include('admin.fungsionaris.modals._pegawai')
    @include('components.modals._confirm-delete-modal')
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datedropper/css/datedropper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">

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
        const dateOptions = {
            theme: 'leaf',
            format: 'd-m-Y'
        };

        $(document).ready(function () {
            try {
                @if (count($pegawais) > 0)
                    $('#pegawai-table').DataTable();
                @endif
            } catch(e) {
                console.error(e);
            }
            $('#add').on('click', function () {
                $('#modal-pegawai').modal('show');
            });

            $('#tanggal_lahir').dateDropper(dateOptions);
            $('#tanggal_mulai').dateDropper(dateOptions);
        });

        $("#confirmDeleteModal").on('shown.bs.modal', function(e) {
            const url = $(e.relatedTarget).data('url');
            const form = confirmDeleteModal.querySelector('#deleteForm');
            form.action = url;
        });

        const createForm = (e) => {
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("password_confirmation");
            let errMsg;

            if (password.value != confirmPassword.value) {
                errMsg = 'Maaf, konfirmasi password belum sama pada data login pegawai';
            } else if (password.value.length < 6) {
                errMsg = 'Password min. 6 karakter';
            }

            if (errMsg) {
                toastr.error(errMsg);
                e.preventDefault();
                return false;
            }
        }

        document.addEventListener('submit', (e) => {
            const id = e.target.id;
            switch(e.target.id) {
                case "createForm": createForm(e); break;
            }
        });
    </script>
@endpush
