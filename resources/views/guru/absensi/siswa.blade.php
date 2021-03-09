@extends('layouts.guru')

{{-- config 1 --}}
@section('title', 'Absensi | Absesnsi Siswa')
@section('title-2', 'Absesnsi Siswa')
@section('title-3', 'Absesnsi Siswa')

@section('describ')
    Ini adalah halaman absensi siswa per kelas untuk guru
@endsection

@section('icon-l', 'fa fa-clipboard-list')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('guru.absensi.siswa') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="card-block">
                        <h6>Kelas</h6>
                        <form id="form-absensi" action="{{route('guru.absensi.siswa')}}" method="get">
                            <input type="hidden" name="req" value="table">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <input type="text" value="{{$kelas->name ?? '-- Anda bukan merupakan wali kelas --'}}" readonly class="form-control form-control-sm">
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <input type="text" name="tanggal" id="tanggal" class="form-control form-control-sm" placeholder="Tanggal" readonly required value="{{$tanggal}}">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                                    <input type="submit" value="Pilih" class="btn btn-block btn-sm btn-primary shadow-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">H</th>
                                        <th class="text-center">A</th>
                                        <th class="text-center">S</th>
                                        <th class="text-center">I</th>
                                        <th class="text-center">Lainnya</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    @foreach($data as $obj)
                                    <form class="form-absensi">
                                        <input type="hidden" name="siswa_id" value="{{$obj->id}}">
                                        <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                                        <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                        <tr>
                                            <td>{{ $obj->nama_lengkap}}</td>
                                            <td class="text-center">{{ $obj->kelas->name ?? ''}}</td>
                                            <td class="text-center"><input type="radio" name="status" value="H" required {{$obj->absensi && $obj->absensi->status == 'H' ? 'checked' : ''}}></td>
                                            <td class="text-center"><input type="radio" name="status" value="A" required {{$obj->absensi && $obj->absensi->status == 'A' ? 'checked' : ''}}></td>
                                            <td class="text-center"><input type="radio" name="status" value="S" required {{$obj->absensi && $obj->absensi->status == 'S' ? 'checked' : ''}}></td>
                                            <td class="text-center"><input type="radio" name="status" value="I" required {{$obj->absensi && $obj->absensi->status == 'I' ? 'checked' : ''}}></td>
                                            <td class="text-center"><input type="radio" name="status" value="L" required {{$obj->absensi && $obj->absensi->status == 'L' ? 'checked' : ''}}></td>
                                            <td id="submit_{{$obj->id}}" class="text-center">
                                                @if($obj->absensi)
                                                APPROVE
                                                @else
                                                <input type="submit" class="btn btn-success" value="approve">
                                                @endif
                                            </td>
                                        </tr>
                                    </form>
                                    @endforeach
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
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datedropper/css/datedropper.min.css') }}" />
@endpush

{{-- addons js --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datedropper/js/datedropper.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#tanggal').dateDropper({
                theme: 'leaf',
                format: 'Y-m-d'
            });

            $(".form-absensi").on('submit', function(ev){
                ev.preventDefault();
                var params = {};
                $.each($(this).serializeArray(), function() {
                    params[this.name] = this.value;
                });
                params = {
                    ...params,
                    req: 'write'
                };

                $.post("{{route('guru.absensi.siswa.write')}}", params).done(data => {
                    toastr.success('Data berhasil disimpan');
                    $(`#submit_${params.siswa_id}`).html("APPROVE");
                }).fail((data) => {
                    if(typeof data.responseJSON.message == 'string')
                        return Swal.fire('Error', data.responseJSON.message, 'error');
                    else if(typeof data.responseText == 'string')
                        return Swal.fire('Error', data.responseText, 'error');
                })

                //console.log(`#submit_${data.siswa_id}`);
            })
        });
    </script>
@endpush
