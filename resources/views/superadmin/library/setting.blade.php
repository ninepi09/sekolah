@extends('layouts.superadmin')

@section('title', 'Library Setting')
@section('title-2', 'Library Setting')
@section('title-3', 'Library Setting')
@section('describ')
    Ini adalah halaman library setting untuk superadmin
@endsection
@section('icon-l', 'icon-settings')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('superadmin.library-setting') }}
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tipe" role="tab">Tipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kategori" role="tab">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#penulis" role="tab">Penulis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#penerbit" role="tab">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tingkat" role="tab">Tingkat</a>
                    </li>
                </ul>
                <div class="tab-content modal-body">
                    {{-- Tipe --}}
                    <div class="tab-pane active" id="tipe" role="tabpanel">
                        @include('superadmin.library.tabs._tipe')
                    </div>

                    {{-- Kategori --}}
                    <div class="tab-pane" id="kategori" role="tabpanel">
                        @include('superadmin.library.tabs._kategori')
                    </div>
                    
                    {{-- Penulis --}}
                    <div class="tab-pane" id="penulis" role="tabpanel">
                        @include('superadmin.library.tabs._penulis')
                    </div>

                    {{-- Penerbit --}}
                    <div class="tab-pane" id="penerbit" role="tabpanel">
                        @include('superadmin.library.tabs._penerbit')
                    </div>

                    {{-- Tingkat --}}
                    <div class="tab-pane" id="tingkat" role="tabpanel">
                        @include('superadmin.library.tabs._tingkat')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

        div.add-container {
            display: none;
        }
        
        div.update-container, .btn-cancel {
            display: none;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-add').on('click', function (e) {
                const addContainer = e.target.nextElementSibling;
                $(addContainer).toggle(500);
                if ($(this).text() == 'Tambah') {
                    $(this).text('Batal').removeClass('btn-primary').addClass('btn-danger');
                } else {
                    $(this).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                }
            });

            $('.btn-cancel').on('click', function (e) {
                const updateContainer = this.nextElementSibling;
                const form = updateContainer.querySelector('form');
                const container = this.parentElement;
                const addBtn = container.querySelector('button.btn-add');
                $(updateContainer).hide(500);
                $(this).hide();
                $(addBtn).show();
            });

            const addTipeContainer = document.getElementById('add-tipe-container');
            const updateTipeContainer = document.getElementById('update-tipe-container');
            const addTipeBtn = document.getElementById('add-tipe-btn');
            const cancelTipeBtn = document.getElementById('cancel-tipe-btn');

            $(document).on('click', '#edit-tipe', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/superadmin/library/setting/tipe/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#tipe-update').val(data.tipe.name);
                        $(updateTipeContainer).show(500);
                        $(addTipeContainer).hide();
                        if ($(addTipeBtn).text() == 'Batal') {
                            $(addTipeBtn).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                        }
                        $(addTipeBtn).hide();
                        $(cancelTipeBtn).show();
                    }
                });
            });

            const addKategoriContainer = document.getElementById('add-kategori-container');
            const updateKategoriContainer = document.getElementById('update-kategori-container');
            const addKategoriBtn = document.getElementById('add-kategori-btn');
            const cancelKategoriBtn = document.getElementById('cancel-kategori-btn');
            const formUpdateKategori = document.getElementById('form-kategori-update');

            $(document).on('click', '#edit-kategori', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/superadmin/library-kategori/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        formUpdateKategori.action = `/superadmin/library-kategori/${id}`;
                        $('#kategori-update').val(data.kategori.name);
                        $(updateKategoriContainer).show(500);
                        $(addKategoriContainer).hide();
                        if ($(addKategoriBtn).text() == 'Batal') {
                            $(addKategoriBtn).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                        }
                        $(addKategoriBtn).hide();
                        $(cancelKategoriBtn).show();
                    }
                });
            });
            
            const addPenulisContainer = document.getElementById('add-penulis-container');
            const updatePenulisContainer = document.getElementById('update-penulis-container');
            const addPenulisBtn = document.getElementById('add-penulis-btn');
            const cancelPenulisBtn = document.getElementById('cancel-penulis-btn');
            const formUpdatePenulis = document.getElementById('form-penulis-update');

            $(document).on('click', '#edit-penulis', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/superadmin/library-penulis/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        formUpdatePenulis.action = `/superadmin/library-penulis/${id}`;
                        $('#penulis-update').val(data.penulis.name);
                        $(updatePenulisContainer).show(500);
                        $(addPenulisContainer).hide();
                        if ($(addPenulisBtn).text() == 'Batal') {
                            $(addPenulisBtn).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                        }
                        $(addPenulisBtn).hide();
                        $(cancelPenulisBtn).show();
                    }
                });
            });
            
            const addPenerbitContainer = document.getElementById('add-penerbit-container');
            const updatePenerbitContainer = document.getElementById('update-penerbit-container');
            const addPenerbitBtn = document.getElementById('add-penerbit-btn');
            const cancelPenerbitBtn = document.getElementById('cancel-penerbit-btn');
            const formUpdatePenerbit = document.getElementById('form-penerbit-update');

            $(document).on('click', '#edit-penerbit', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/superadmin/library-penerbit/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        formUpdatePenerbit.action = `/superadmin/library-penerbit/${id}`;
                        $('#penerbit-update').val(data.penerbit.penerbit);
                        $('#tahun-penerbit-update').val(data.penerbit.tahun);
                        $(updatePenerbitContainer).show(500);
                        $(addPenerbitContainer).hide();
                        if ($(addPenerbitBtn).text() == 'Batal') {
                            $(addPenerbitBtn).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                        }
                        $(addPenerbitBtn).hide();
                        $(cancelPenerbitBtn).show();
                    }
                });
            });
            
            const addTingkatContainer = document.getElementById('add-tingkat-container');
            const updateTingkatContainer = document.getElementById('update-tingkat-container');
            const addTingkatBtn = document.getElementById('add-tingkat-btn');
            const cancelTingkatBtn = document.getElementById('cancel-tingkat-btn');
            const formUpdateTingkat = document.getElementById('form-tingkat-update');

            $(document).on('click', '#edit-tingkat', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/superadmin/library-tingkat/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        formUpdateTingkat.action = `/superadmin/library-tingkat/${id}`;
                        $('#tingkat-update').val(data.tingkat.name);
                        $(updateTingkatContainer).show(500);
                        $(addTingkatContainer).hide();
                        if ($(addTingkatBtn).text() == 'Batal') {
                            $(addTingkatBtn).text('Tambah').removeClass('btn-danger').addClass('btn-primary');
                        }
                        $(addTingkatBtn).hide();
                        $(cancelTingkatBtn).show();
                    }
                });
            });

            @if (Session::has('message'))
                const type = "{{ Session::get('alert-type', 'info') }}";
                console.log(type)
                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        });
        
        $("#confirmDeleteModal").on('shown.bs.modal', function(e) {
            const url = $(e.relatedTarget).data('url');
            const form = confirmDeleteModal.querySelector('#deleteForm');
            form.action = url;
        });
    </script>
@endpush