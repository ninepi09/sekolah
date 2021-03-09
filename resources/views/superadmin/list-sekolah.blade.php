@extends('layouts.superadmin')

@section('title', 'List Sekolah')
@section('title-2', 'List Sekolah')
@section('title-3', 'List Sekolah')
@section('describ')
    Ini adalah halaman list sekolah untuk superadmin
@endsection
@section('icon-l', 'icon-home')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('superadmin.list-sekolah') }}
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>List Sekolah</h5>
            </div>
            <div class="card-body">
                <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Sekolah</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jenjang</th>
                                    <th>T. A</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    <th>Kabupaten</th>
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
@include('superadmin.modals._tambah-sekolah')

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <h5 align="center" id="confirm">Apakah anda yakin ingin menghapus data ini?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-sm btn-outline-danger">Hapus</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
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
                    url: "{{ route('superadmin.list-sekolah') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'id_sekolah',
                    name: 'id_sekolah'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'jenjang',
                    name: 'jenjang'
                },
                {
                    data: 'tahun_ajaran',
                    name: 'tahun_ajaran'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                },
                {
                    data: 'provinsi',
                    name: 'provinsi'
                },
                {
                    data: 'kabupaten',
                    name: 'kabupaten'
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
                    targets: 5
                }
                ]
            });

            $('#rest').on('click', function () {
                $('#form-sekolah')[0].reset();
                $('#btn').removeClass('btn-outline-info').addClass('btn-outline-success').text('Simpan');
            });

            $('.close').on('click', function () {
                $('#form-sekolah')[0].reset();
                $('#btn').removeClass('btn-outline-info').addClass('btn-outline-success').text('Simpan');
            });

            $('#add').on('click', function () {
                $('#modal-sekolah').modal('show');
                $('.modal-title').text('Tambahin Sekolah nya doong');
                $('#action').val('add');
                $('#btn').removeClass('btn-outline-info').addClass('btn-outline-success').text('Simpan');
            });

            $('#form-sekolah').on('submit', function (e) {
                if ($('#action').val() == 'add') {
                    this.action = "{{ route('superadmin.list-sekolah') }}";
                    this.method = "POST";
                    this.querySelector("input[name=_method]").value = "POST";
                }
                
                if ($('#action').val() == 'edit') {
                    this.action = "{{ route('superadmin.list-sekolah-update') }}";
                    this.querySelector("input[name=_method]").value = "POST";
                }
                return;

                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            for (var count = 0; count < data.errors.length; count++) {
                                html = data.errors[count];
                            }
                            $('#sekolah').addClass('is-invalid');
                            $('#id_sekolah').addClass('is-invalid');
                            $('#name').addClass('is-invalid');
                            $('#jenjang').addClass('is-invalid');
                            $('#tahun_ajaran').addClass('is-invalid');
                            $('#alamat').addClass('is-invalid');
                            $('#provinsi').addClass('is-invalid');
                            $('#kabupaten').addClass('is-invalid');
                            $('#username').addClass('is-invalid');
                            $('#password').addClass('is-invalid');
                            toastr.error(html);
                        }

                        if (data.success) {
                            toastr.success(data.success);
                            $('#modal-sekolah').modal('hide');
                            $('#id_sekolah').removeClass('is-invalid');
                            $('#name').removeClass('is-invalid');
                            $('#jenjang').removeClass('is-invalid');
                            $('#tahun_ajaran').removeClass('is-invalid');
                            $('#alamat').removeClass('is-invalid');
                            $('#provinsi').removeClass('is-invalid');
                            $('#kabupaten').removeClass('is-invalid');
                            $('#username').removeClass('is-invalid');
                            $('#password').removeClass('is-invalid');
                            $('#form-sekolah')[0].reset();
                            $('#action').val('add');
                            $('#btn').removeClass('btn-outline-info').addClass('btn-outline-success').text('Simpan');
                            $('#order-table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function () {
                var id = $(this).attr('id');
                $.ajax({
                    url: '/superadmin/list-sekolah/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#action').val('edit');
                        $('#btn').removeClass('btn-outline-success').addClass('btn-outline-info').text('Update');
                        $('#id_sekolah').val(data.sekolah.id_sekolah);
                        $('#name').val(data.sekolah.name);
                        $('#jenjang').val(data.sekolah.jenjang);
                        $('#tahun_ajaran').val(data.sekolah.tahun_ajaran);
                        $('#alamat').val(data.sekolah.alamat);
                        $('#provinsi').val(data.sekolah.provinsi);
                        $('#kabupaten').val(data.sekolah.kabupaten);
                        $('#hidden_id').val(data.sekolah.id);
                        $('#username').val(data.user[0].username).attr('readonly', true);
                        $('#password').val(data.user[0].password).attr('readonly', true);
                        $('#modal-sekolah').modal('show');
                    }
                });
            });

            var user_id;
            $(document).on('click', '.delete', function () {
                user_id = $(this).attr('id');
                $('#ok_button').text('Hapus');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function () {
                $.ajax({
                    url: '/superadmin/list-sekolah/hapus/'+user_id,
                    beforeSend: function () {
                        $('#ok_button').text('Menghapus...');
                    }, success: function (data) {
                        setTimeout(function () {
                            $('#confirmModal').modal('hide');
                            $('#order-table').DataTable().ajax.reload();
                            toastr.success(data.success);
                        }, 1000);
                    }
                });
            });
        });

        // function deleteConfirmation(id) {
        //     var number = id;
        //     console.log(number);
        //     Swal.fire({
        //         icon: 'warning',
        //         title: "Delete?",
        //         text: "Please ensure and then confirm!",
        //         type: "warning",
        //         showCancelButton: !0,
        //         confirmButtonText: "Yes, delete it!",
        //         cancelButtonText: "No, Cancel it!",
        //         reverseButtons: !0
        //     }).then(function (event) {
        //         if (event.value === true) {
        //             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //             $.ajax({
        //                 url: '/superadmin/list-sekolah/delete/'+number,
        //                 type: 'POST',
        //                 data: { _token: CSRF_TOKEN },
        //                 dataType: 'JSON',
        //                 success: function (results) {
        //                     if (results.success === true) {
        //                         Swal.fire({
        //                             icon: 'success',
        //                             title: "Success!",
        //                             text: "👍 Data Deleted Successfully.",
        //                         });
        //                         $('#form-sekolah')[0].reset();
        //                         $('#order-table').DataTable().ajax.reload();
        //                     } else {
        //                         toastr.error('⚠ Failed!');
        //                     }
        //                 }
        //             });
        //         } else {
        //             event.dismiss;
        //         }
        //     }, function (dismiss) {
        //         return false;
        //     });
        // }
    </script>
@endpush