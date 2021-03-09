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
                <h5>Library</h5>
            </div>
            <div class="card-body">
                <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Tingkat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@include('superadmin.modals._tambah-baru')
@include('components.modals._confirm-delete-modal')
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
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
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('superadmin.library.index') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {
                    data: 'penulis',
                    name: 'penulis'
                },
                {
                    data: 'penerbit',
                    name: 'penerbit'
                },
                {
                    data: 'tahun_terbit',
                    name: 'tahun_terbit'
                },
                {
                    data: 'tingkat',
                    name: 'tingkat'
                },
                {
                    data: 'action',
                    name: 'action'
                }
                ],
                columnDefs: [
                {
                    render: function (data, type, full, meta) {
                        return "<div class='text-wrap width-200'>" + data + "</div>";
                    },
                    targets: 2
                }
                ]
            });

            $('#add').on('click', function () {
                $('#modal-library').modal('show');
            });
        });

        $("#confirmDeleteModal").on('shown.bs.modal', function(e) {
            const url = $(e.relatedTarget).data('url');
            const form = confirmDeleteModal.querySelector('#deleteForm');
            form.action = url;
        });
    </script>
@endpush