@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Sekolah | Jam Pelajaran')
@section('title-2', 'Jam Pelajaran')
@section('title-3', 'Jam Pelajaran')

@section('describ')
    Ini adalah halaman jam pelajaran untuk sekolah
@endsection

@section('icon-l', 'fa fa-list-alt')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.sekolah.jam') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="dt-responsive">
                          <form id="form-jam-pelajaran">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hari">Hari</label>
                                        <select name="hari" id="hari" class="form-control form-control-sm">
                                            <option disabled="" value="">-- Hari --</option>
                                            <option value="senin">Senin</option>
                                            <option value="selasa">Selasa</option>
                                            <option value="rabu">Rabu</option>
                                            <option value="kamis">Kamis</option>
                                            <option value="jumat">Jumat</option>
                                            <option value="sabtu">Sabtu</option>
                                            <option value="minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hari">Jam ke</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jam ke" name="jam_ke">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jam_mulai">Jam Mulai</label>
                                        <input id="jam_mulai" type="text" class="clockpicker form-control form-control-sm" placeholder="Jam Mulai" name="jam_mulai" required readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hari">Jam Selesai</label>
                                        <input type="text" class="clockpicker form-control form-control-sm" placeholder="Jam Selesai" name="jam_selesai" required readonly>
                                    </div>
                                </div>
                            </div>
                            
                              <br>
                              <div class="row">
                                <div class="col">
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                                    <button id="reset-form" type="button" class="btn btn-sm btn-danger">Batal</button>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row" >
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                      <form method="get" action="{{route('admin.sekolah.jam')}}">
                        <div class="dt-responsive ">
                            <div class="row">
                                <div class="col">
                                    <label for="nama_calon">Tampil Jadwal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                  <input type="hidden" name="req" value="table">
                                <input type="submit" class="btn btn-sm btn-outline-success" value="Tampil" id="tampil">
                            </div>
                            </div>
                        </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="row" id="showjpcard">
        <div class="col-md-12">

        <div class="row">
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Senin', 'data' => $data['senin'] ?? []])
          </div>
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Selasa', 'data' => $data['selasa'] ?? []])
          </div>
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Rabu', 'data' => $data['rabu'] ?? []])
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Kamis', 'data' => $data['kamis'] ?? []])
          </div>
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Jumat', 'data' => $data['jumat'] ?? []])
          </div>
          <div class="col-md-4">
            @include('admin.sekolah.jam-pelajaran-table-hari', ['hari' => 'Sabtu', 'data' => $data['sabtu'] ?? []])
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-clockpicker.min.css') }}" />
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
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('.clockpicker').clockpicker({donetext: 'Done', autoclose: true});

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var resetForm = () => {
              $('select[name=hari]').val("senin");
              $('input[name=jam_ke]').val("");
              $('input[name=jam_mulai]').val("");
              $('input[name=jam_selesai]').val("");
            };

            $("#reset-form").click(() => {
              resetForm();
            });

            $('#form-jam-pelajaran').on('submit', function (event) {
                event.preventDefault();
                var url = "{{ route('admin.sekolah.jam.write') }}?req=write";
                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                    success: function (data) {
                        toastr.success('Data berhasil disimpan');
                        resetForm();
                        window.location.reload();
                    },
                    error: function(data) {
                      if(typeof data.responseJSON.message == 'string')
                        return Swal.fire('Error', data.responseJSON.message, 'error');
                      else if(typeof data.responseJSON == 'string')
                        return Swal.fire('Error', data.responseJSON, 'error');
                    }
                });
            });

            $("#showjpcard").on('click', '.btn-delete', function(ev, data) {
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
                            url: "{{ route('admin.sekolah.jam.write') }}?req=delete&id=" + id,
                            cache: false,
                            method: "POST",
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                toastr.success('Data berhasil dihapus');
                                setTimeout(() => {
                                 window.location.reload();
                                }, 500)
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

            loadData();

        });
    </script>
@endpush
