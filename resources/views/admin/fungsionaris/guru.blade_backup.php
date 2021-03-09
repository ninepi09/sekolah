@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Fungsionaris | guru')
@section('title-2', 'guru')
@section('title-3', 'guru')

@section('describ')
    Ini adalah halaman guru untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.fungsionaris.guru') }}
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
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Guru</th>
                                        <th>No Telp</th>
                                        <th>Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    @include('admin.fungsionaris.modals._guru')
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
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    {{-- <script>
        var csrfToken = $('[name="csrf_token"]').attr('content');

        setInterval(refreshToken, 3600000);

        function refreshToken()
        {
            $.get('/route/untuk/refresh/token').done(function(data)
            {
                csrfToken = data;
            });
        }

        setInterval(refreshToken, 3600000);
    </script> --}}
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var modal = $('#modal-guru');

            var form = $("#form_guru");

            //read
            var table = $('#order-table').DataTable({
                processing:true,
                serverSide: true,
                ajax: "{{ route('admin.fungsionaris.guru') }}?req=table",
                columns:[
                    {data: 'nip'},
                    {data: 'nama_guru'},
                    {data: 'no_telepon'},
                    {data: 'alamat_tinggal'},
                    {data: 'id', render: (data) => {
                        return  `<button data-id="${data}" type="button" class="btn-edit btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                            &nbsp;&nbsp;
                        <button data-id="${data}" type="button" class="btn-delete btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>`;
                    }},
                ]
            });

            $('#add').on('click', function () {
                //$("#id").val('');
                $("#form_guru").find('input').val('');
                $("#form_guru").find('select').val('');
                $("#form_guru").find('textarea').val('');
                modal.modal('show');
            });

            $('#tanggal_lahir').dateDropper({
                theme: 'leaf',
                format: 'Y-m-d'
            });

            $('#tanggal_mulai').dateDropper({
                theme: 'leaf',
                format: 'Y-m-d'
            });

            $("#form_guru_submit").click(function(){
                form.submit();
            });

            form.submit(ev => {
                ev.preventDefault();
                var formData = new FormData();
                $.each($(this).find('input[type="file"]'), function (i, tag) {
                    $.each($(tag)[0].files, function (i, file) {
                        formData.append(tag.name, file);
                    });
                });
                var params = $('#form_guru').serializeArray();
                $.each(params, function (i, val) {
                    formData.append(val.name, val.value);
                });

                $.ajax({
                    url: "{{ route('admin.fungsionaris.guru.write') }}?req=write",
                    cache: false,
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        Swal.fire("Berhasil", "Data berhasil disimpan", "success");
                        modal.modal('hide');
                        table.ajax.reload();
                    },
                    error: function(data) {
                        if(typeof data.responseJSON.message == 'string')
                            return Swal.fire('Error', data.responseJSON.message, 'error');
                        else if(typeof data.responseJSON == 'string')
                            return Swal.fire('Error', data.responseJSON, 'error');

                    }
                });

            });
            //delete done
            $("#order-table").on('click', '.btn-delete', function(ev, data) {
                var id = ev.currentTarget.getAttribute('data-id');
                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: "Apa anda yakin untuk menghapus data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.fungsionaris.guru.write') }}?req=delete&id=" + id,
                            cache: false,
                            method: "POST",
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                Swal.fire("Berhasil", "Data berhasil dihapus", "success");
                                table.ajax.reload();
                            },
                            error: function(data) {
                                if(typeof data.responseJSON.message == 'string')
                                    return Swal.fire('Error', data.responseJSON.message, 'error');
                                else if(typeof data.responseJSON == 'string')
                                    return Swal.fire('Error', data.responseJSON, 'error');
                            }
                        });
                    }
                    })
            });

            $("#order-table").on('click', '.btn-edit', function(ev, data) {
                var id = ev.currentTarget.getAttribute('data-id');
                $.get("{{route('admin.fungsionaris.guru')}}?req=single&id=" + id, function (data, status){
                    for(key in data) {
                        $(`#${key}`).val(data[key])
                    }

                    modal.modal('show');
                });
            })

        });
    </script>
@endpush
