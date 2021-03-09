@extends('layouts.superadmin')

@section('title', 'Referensi | Kabupaten/Kota')
@section('title-2', 'Kabupaten/Kota')
@section('title-3', 'Kabupaten/Kota')
@section('describ')
    Ini adalah halaman kabupaten/kota untuk superadmin
@endsection
@section('icon-l', 'icon-map')
@section('icon-r', 'icon-home')
@section('link')
    {{ route('superadmin.referensi.kabupaten-kota') }}
@endsection

@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-block">
                    <form id="form-kabupaten-kota">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <span id="form_result" class="text-danger"></span>
                                <div class="form-group">
                                    <label for="provinsi_id">Provinsi:</label>
                                    <select name="provinsi_id" id="provinsi_id" class="form-control form-control-sm">
                                        <option value="">-- Provinsi --</option>
                                        @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label for="kabupaten_kota">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota" id="kabupaten_kota" class="form-control form-control-sm" placeholder="Kabupaten/Kota">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="hidden_id" id="hidden_id">
                                <input type="hidden" id="action" val="add">
                                <input type="submit" class="btn btn-sm btn-outline-success" value="Simpan" id="btn">
                                <button type="reset" class="btn btn-sm btn-danger">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                            <thead class="text-left">
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Provinsi</th>
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
    <script>
        $(document).ready(function () {
            $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('superadmin.referensi.kabupaten-kota') }}",
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
                    data: 'provinsi_id',
                    name: 'provinsi_id.name'
                },
                {
                    data: 'action',
                    name: 'action'
                }
                ]
            });

            $('#form-kabupaten-kota').on('submit', function (event) {
                event.preventDefault();
                var url = '';

                if ($('#action').val() == 'add') {
                    url = "{{ route('superadmin.referensi.kabupaten-kota') }}";
                }
                
                if ($('#action').val() == 'edit') {
                    url = "{{ route('superadmin.referensi.kabupaten-kota-update') }}";
                }

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
                            $('#kabupaten_kota').addClass('is-invalid');
                            $('#provinsi_id').addClass('is-invalid');
                            toastr.error(html);
                        }

                        if (data.success) {
                            toastr.success(data.success);
                            $('#kabupaten_kota').removeClass('is-invalid');
                            $('#provinsi_id').removeClass('is-invalid');
                            $('#form-kabupaten-kota')[0].reset();
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
                    url: '/superadmin/referensi/kabupaten-kota/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#kabupaten_kota').val(data.kabupatenKota.name);
                        $('#provinsi_id').val(data.kabupatenKota.provinsi_id);
                        $('#hidden_id').val(data.kabupatenKota.id);
                        $('#action').val('edit');
                        $('#btn')
                            .removeClass('btn-outline-success')
                            .addClass('btn-outline-info')
                            .val('Update');
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
                    url: '/superadmin/referensi/kabupaten-kota/hapus/'+user_id,
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
    </script>
@endpush