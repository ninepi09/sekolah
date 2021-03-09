@extends('layouts.superadmin')

{{-- config 1 --}}
@section('title', 'Slider')
@section('title-2', 'Slider')
@section('title-3', 'Slider')

@section('describ')
    Ini adalah halaman slider untuk Superadmin
@endsection

@section('icon-l', 'icon-list')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('superadmin.slider') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                        <div class="dt-responsive table-responsive mt-3">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Kabupaten</th>
                                        <th>Sekolah</th>
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

    {{-- Modal --}}
    @include('superadmin.modals._slider')
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{ asset('bower_components/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datedropper/css/datedropper.min.css') }}" />
    <style>
        .btn i {
            margin-right: 0px;
        }

        .select2-container {
            width: 100% !important;
            padding: 0;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Select 2 js -->
    <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('bower_components/datedropper/js/datedropper.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $('#add').on('click', function () {
                $('#modal-slider').modal('show');
            });

            $('#sekolah').select2();

            $('#tanggal_mulai').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });

            $('#tanggal_selesai').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });

            // $('#order-table').DataTable({
            //     processing: true,
            //     serverSide: true,
            //     ajax: {
            //         url: "{{ route('admin.e-voting.pemilihan') }}",
            //     },
            //     columns: [
            //     {
            //         data: 'DT_RowIndex',
            //         name: 'DT_RowIndex'
            //     },
            //     {
            //         data: 'name',
            //         name: 'name'
            //     },
            //     {
            //         data: 'posisi',
            //         name: 'posisi'
            //     },
            //     {
            //         data: 'start_date',
            //         name: 'start_date'
            //     },
            //     {
            //         data: 'end_date',
            //         name: 'end_date'
            //     },
            //     {
            //         data: 'action',
            //         name: 'action'
            //     }
            //     ],
            //     columnDefs: [
            //     {
            //         render: function (data, type, full, meta) {
            //             return "<div class='text-wrap width-200'>" + data + "</div>";
            //         },
            //         targets: 5
            //     }
            //     ]
            // });

            // $('#form-pemilihan').on('submit', function (event) {
            //     event.preventDefault();

            //     var url = '';
            //     if ($('#action').val() == 'add') {
            //         url = "{{ route('admin.e-voting.pemilihan') }}";
            //     }

            //     if ($('#action').val() == 'edit') {
            //         url = "{{ route('admin.e-voting.pemilihan-update') }}";
            //     }

            //     $.ajax({
            //         url: url,
            //         method: 'POST',
            //         dataType: 'JSON',
            //         data: $(this).serialize(),
            //         success: function (data) {
            //             var html = ''
            //             if (data.errors) {
            //                 html = data.errors[0];
            //                 $('#nama_calon').addClass('is-invalid');
            //                 toastr.error(html);
            //             }

            //             if (data.success) {
            //                 toastr.success('Sukses!');
            //                 $('#modal-pemilihan').modal('hide');
            //                 $('#siswa').removeClass('is-invalid');
            //                 $('#form-pemilihan')[0].reset();
            //                 $('#action').val('add');
            //                 $('#btn')
            //                     .removeClass('btn-outline-info')
            //                     .addClass('btn-outline-success')
            //                     .val('Simpan');
            //                 $('#order-table').DataTable().ajax.reload();
            //             }
            //             $('#form_result').html(html);
            //         }
            //     });
            // });

            // $(document).on('click', '.edit', function () {
            //     var id = $(this).attr('id');
            //     $.ajax({
            //         url: '/admin/e-voting/pemilihan/'+id,
            //         dataType: 'JSON',
            //         success: function (data) {
            //             $('#action').val('edit');
            //             $('#btn').removeClass('btn-outline-success').addClass('btn-outline-info').text('Update');
            //             $('#nama_calon').val(data.name.name);
            //             $('#posisi').val(data.posisi.posisi);
            //             $('#start_date').val(data.start_date.start_date);
            //             $('#end_date').val(data.end_date.end_date);
            //             $('#hidden_id').val(data.name.id);
            //             $('#modal-pemilihan').modal('show');
            //         }
            //     });
            // });

            // var user_id;
            // $(document).on('click', '.delete', function () {
            //     user_id = $(this).attr('id');
            //     $('#ok_button').text('Hapus');
            //     $('#confirmModal').modal('show');
            // });

            // $('#ok_button').click(function () {
            //     $.ajax({
            //         url: '/admin/e-voting/pemilihan/hapus/'+user_id,
            //         beforeSend: function () {
            //             $('#ok_button').text('Menghapus...');
            //         }, success: function (data) {
            //             setTimeout(function () {
            //                 $('#confirmModal').modal('hide');
            //                 $('#order-table').DataTable().ajax.reload();
            //                 toastr.success('Data berhasil dihapus');
            //             }, 1000);
            //         }
            //     });
            // });

        });
    </script>
@endpush