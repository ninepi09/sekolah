@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Pelanggaran | Pelanggaran Siswa')
@section('title-2', 'Pelanggaran Siswa')
@section('title-3', 'Pelanggaran Siswa')

@section('describ')
    Ini adalah halaman pelanggaran siswa untuk admin
@endsection

@section('icon-l', 'icon-people')
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
                    <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal</th>
                                        <th>Pelanggaran</th>
                                        <th>Poin</th>
                                        <th>Sebab</th>
                                        <th>Sanksi</th>
                                        <th>Penanganan</th>
                                        <th>Keterangan</th>
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
    @include('admin.pelanggaran.modals._siswa')

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
        $(document).ready(function () {
            $('#add').on('click', function () {
                $('#modal-siswa').modal('show');
            });

            $('#tanggal_pelanggaran').dateDropper({
                theme: 'leaf',
                format: 'd-m-Y'
            });

            $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.pelanggaran.siswa') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama_siswa',
                    name: 'nama_siswa'
                },
                {
                    data: 'tanggal_pelanggaran',
                    name: 'tanggal_pelanggaran'
                },
                {
                    data: 'pelanggaran',
                    name: 'pelanggaran'
                },
                {
                    data: 'poin',
                    name: 'poin'
                },
                {
                    data: 'sebab',
                    name: 'sebab'
                },
                {
                    data: 'sanksi',
                    name: 'sanksi'
                },
                {
                    data: 'penanganan',
                    name: 'Penanganan'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
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

            $('#form-pelanggaran-siswa').on('submit', function (event) {
                event.preventDefault();

                var url = '';
                if ($('#siswa').val() == 'add') {
                    url = "{{ route('admin.pelanggaran.siswa') }}";
                }

                if ($('#action').val() == 'edit') {
                    url = "{{ route('admin.pelanggaran.siswa-update') }}";
                }

                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                    success: function (data) {
                        var html = ''
                        if (data.errors) {
                            html = data.errors[0];
                            $('#siswa').addClass('is-invalid');
                            toastr.error(html);
                        }

                        if (data.success) {
                            toastr.success('Sukses!');
                            $('#modal-siswa').modal('hide');
                            $('#siswa').removeClass('is-invalid');
                            $('#form-pelanggaran-siswa')[0].reset();
                            $('#action').val('add');
                            $('#btn')
                                .removeClass('btn-outline-info')
                                .addClass('btn-outline-success')
                                .val('Simpan');
                            $('#order-table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function () {
                var id = $(this).attr('id');
                $.ajax({
                    url: '/admin/pelanggaran/siswa/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#action').val('edit');
                        $('#btn').removeClass('btn-outline-success').addClass('btn-outline-info').text('Update');
                        $('#nama_siswa').val(data.nama_siswa.nama_siswa);
                        $('#tanggal_pelanggaran').val(data.tanggal_pelanggaran.tanggal_pelanggaran);
                        $('#pelanggaran').val(data.pelanggaran.pelanggaran);
                        $('#poin').val(data.poin.poin);
                        $('#sebab').val(data.sebab.sebab);
                        $('#sanksi').val(data.sanksi.sanksi);
                        $('#penanganan').val(data.penanganan.penanganan);
                        $('#keterangan').val(data.keterangan.keterangan);
                        $('#hidden_id').val(data.nama_siswa.id);
                        $('#modal-siswa').modal('show');
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
                    url: '/admin/pelanggaran/siswa/hapus/'+user_id,
                    beforeSend: function () {
                        $('#ok_button').text('Menghapus...');
                    }, success: function (data) {
                        setTimeout(function () {
                            $('#confirmModal').modal('hide');
                            $('#order-table').DataTable().ajax.reload();
                            toastr.success('Data berhasil dihapus');
                        }, 1000);
                    }
                });
            });
        });

        const pelanggaran = document.getElementById('pelanggaran');
        const poin = document.getElementById('poin');

        function setPoin(selected){

            // console.log(pelanggaran.options[pelanggaran.selectedIndex].dataset.poin);
            poin.value = pelanggaran.options[pelanggaran.selectedIndex].dataset.poin;
        }

    </script>
@endpush