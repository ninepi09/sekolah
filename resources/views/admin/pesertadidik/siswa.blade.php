@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Peserta Didik | Siswa')
@section('title-2', 'Siswa')
@section('title-3', 'Siswa')

@section('describ')
    Ini adalah halaman siswa untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pesertadidik.siswa.index') }}
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
                            <table id="siswa-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    @forelse($siswas as $siswa)
                                        <tr>
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ $siswa->nama_lengkap }}</td>
                                            <td>{{ $siswa->kelas->name }}</td>
                                            <td>{{ $siswa->jk }}</td>
                                            <td>{{ $siswa->alamat_tinggal }}</td>
                                            <td>
                                                @if ($siswa->foto)
                                                    <a target="_blank" href="{{ Storage::url($siswa->foto) }}">Lihat</a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" data-id="{{ $siswa->id }}" class="edit btn btn-mini btn-info shadow-sm">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </button>
                                                &nbsp;&nbsp;
                                                <button type="button" class="btn btn-mini btn-danger shadow-sm"
                                                    data-url="{{ route('admin.pesertadidik.siswa.destroy', $siswa->id) }}"
                                                    data-toggle="modal" data-target="#confirmDeleteModal">
                                                        <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6" class="text-center">Tidak ada data</td></tr>
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
    @include('admin.pesertadidik.modals._siswa')
    @include('components.modals._confirm-delete-modal')
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/pages/jquery.filer/css/jquery.filer.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datedropper/css/datedropper.min.css') }}" />
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/switchery/css/switchery.min.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
@endpush

{{-- addons javascript --}}
@push('js')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/pages/file-upload/dropzone-amd-module.min.js') }}"></script>
    <script src="{{ asset('bower_components/datedropper/js/datedropper.min.js') }}"></script>
    <!--
    <script src="{{ asset('bower_components/switchery/js/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/pages/advance-elements/swithces.js') }}"></script>
    -->
    <script>
        const confirmDeleteModal = document.getElementById('confirmDeleteModal');
        const dateOptions = {
            theme: 'leaf',
            format: 'd-m-Y'
        };

        $(document).ready(function () {
            try {
                $('#siswa-table').DataTable();
            } catch (error) {
            }

            $('#dropper-default').dateDropper(dateOptions);

            $('#tanggal_lahir').dateDropper(dateOptions);

            $('#tanggal_lahir_ayah').dateDropper(dateOptions);

            $('#tanggal_lahir_ibu').dateDropper(dateOptions);

            $('#tanggal_lahir_wali').dateDropper(dateOptions);

            $('#add').on('click', function () {
                clearDataSiswa(); clearDataOrtu(); clearDataWali();
                $('#createForm').attr('action', `{{ route('admin.pesertadidik.siswa.index') }}`);
                $('#btn-submit').text('Tambah');
                $('#modal-siswa input[name=_method]').val("POST");
                $('#modal-siswa').modal('show');
            });
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
                errMsg = 'Maaf, konfirmasi password belum sama pada data login siswa';
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

        $(document).on('click', '.edit', function () {
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/peserta-didik/siswa/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#nis').val(data.nis);
                        $('#nisn').val(data.nisn);
                        $('input[name=tanggal_masuk').val(data.tanggal_masuk);
                        $('#kelas').val(data.id_tingkatan_kelas);
                        $('input[name=nama_lengkap]').val(data.nama_lengkap);
                        $('#nama_panggilan').val(data.nama_panggilan);
                        $('#jk').val(data.jk);
                        $('#agama').val(data.agama);
                        $('#suku').val(data.suku);
                        $('#ktp').val(data.ktp);
                        $('#tempat_lahir').val(data.tempat_lahir);
                        $('#tanggal_lahir').val(data.tanggal_lahir);
                        $('#berat_badan').val(data.berat_badan);
                        $('#tinggi_badan').val(data.tinggi_badan);
                        $('#hobi').val(data.hobi);
                        $('#riwayat_penyakit').val(data.riwayat_penyakit);
                        $('#moda_transportasi').val(data.moda_transportasi);
                        $('#jarak_rumah_sekolah').val(data.jarak_rumah_sekolah);
                        $('#is_siswa_pindahan').val(data.is_siswa_pindahan == 1 ? 'Ya' : 'Tidak');
                        $('#alamat_tinggal').val(data.alamat_tinggal);
                        $('#provinsi').val(data.provinsi);
                        $('#kabupaten').val(data.kabupaten);
                        $('#kecamatan').val(data.kecamatan);
                        $('#dusun').val(data.dusun);
                        $('#rt').val(data.rt);
                        $('#rw').val(data.rw);
                        $('#kode_pos').val(data.kode_pos);
                        $('#no_telepon').val(data.no_telepon);
                        $('#no_telepon_rumah').val(data.no_telepon_rumah);

                        if (data.siswa_orang_tua) {
                            const orangTua = data.siswa_orang_tua;
                            $('#status_anak').val(orangTua.status_anak);
                            $('#anak_ke').val(orangTua.anak_ke);
                            $('#jumlah_saudara').val(orangTua.jumlah_saudara);
                            $('#nama_ayah').val(orangTua.nama_ayah);
                            $('#tempat_lahir_ayah').val(orangTua.tempat_lahir_ayah);
                            $('#tanggal_lahir_ayah').val(orangTua.tanggal_lahir_ayah);
                            $('#agama_ayah').val(orangTua.agama_ayah);
                            $('#kewarganegaraan_ayah').val(orangTua.kewarganegaraan_ayah);
                            $('#pendidikan_ayah').val(orangTua.pendidikan_ayah);
                            $('#pekerjaan_ayah').val(orangTua.pekerjaan_ayah);
                            $('#email_ayah').val(orangTua.email_ayah);
                            $('#nama_ibu').val(orangTua.nama_ibu);
                            $('#tempat_lahir_ibu').val(orangTua.tempat_lahir_ibu);
                            $('#tanggal_lahir_ibu').val(orangTua.tanggal_lahir_ibu);
                            $('#agama_ibu').val(orangTua.agama_ibu);
                            $('#kewarganegaraan_ibu').val(orangTua.kewarganegaraan_ibu);
                            $('#pendidikan_ibu').val(orangTua.pendidikan_ibu);
                            $('#pekerjaan_ibu').val(orangTua.pekerjaan_ibu);
                            $('#email_ibu').val(orangTua.email_ibu);
                            $('#alamat_ortu').val(orangTua.alamat_ortu);
                            $('#no_telepon_ayah').val(orangTua.no_telepon_ayah);
                            $('#no_telepon_ibu').val(orangTua.no_telepon_ibu);
                        } else {
                            clearDataOrtu();
                        }

                        if (data.siswa_wali) {
                            const wali = data.siswa_wali;
                            $('#nama_wali').val(wali.nama_wali);
                            $('#tempat_lahir_wali').val(wali.tempat_lahir_wali);
                            $('#tanggal_lahir_wali').val(wali.tanggal_lahir_wali);
                            $('#agama_wali').val(wali.agama_wali);
                            $('#kewarganegaraan_wali').val(wali.kewarganegaraan_wali);
                            $('#pendidikan_wali').val(wali.pendidikan_wali);
                            $('#pekerjaan_wali').val(wali.pekerjaan_wali);
                            $('#email_wali').val(wali.email_wali);
                        } else {
                            clearDataWali();
                        }

                        $('#createForm').attr('action', `{{ route('admin.pesertadidik.siswa.index') }}/${id}`);
                        $('#btn-submit').text('Ubah');
                        $('#modal-siswa input[name=_method]').val("PUT");
                        $('#modal-siswa').modal('show');
                    }
                });
            });

            function clearDataSiswa() {
                $('#nis').val("");
                $('#nisn').val("");
                $('input[name=tanggal_masuk').val("");
                $('#kelas').val("");
                $('input[name=nama_lengkap]').val("");
                $('#nama_panggilan').val("");
                $('#jk').val("");
                $('#agama').val("");
                $('#suku').val("");
                $('#ktp').val("");
                $('#tempat_lahir').val("");
                $('#tanggal_lahir').val("");
                $('#berat_badan').val("");
                $('#tinggi_badan').val("");
                $('#hobi').val("");
                $('#riwayat_penyakit').val("");
                $('#moda_transportasi').val("");
                $('#jarak_rumah_sekolah').val("");
                $('#is_siswa_pindahan').val("");
                $('#alamat_tinggal').val("");
                $('#provinsi').val("");
                $('#kabupaten').val("");
                $('#kecamatan').val("");
                $('#dusun').val("");
                $('#rt').val("");
                $('#rw').val("");
                $('#kode_pos').val("");
                $('#no_telepon').val("");
                $('#no_telepon_rumah').val("");
                $('#username').val("");
                $('#password').val("");
                $('#password_confirmation').val("");
            }

            function clearDataOrtu() {
                $('#status_anak').val("");
                $('#anak_ke').val("");
                $('#jumlah_saudara').val("");
                $('#nama_ayah').val("");
                $('#tempat_lahir_ayah').val("");
                $('#tanggal_lahir_ayah').val("");
                $('#agama_ayah').val("");
                $('#kewarganegaraan_ayah').val("");
                $('#pendidikan_ayah').val("");
                $('#pekerjaan_ayah').val("");
                $('#email_ayah').val("");
                $('#nama_ibu').val("");
                $('#tempat_lahir_ibu').val("");
                $('#tanggal_lahir_ibu').val("");
                $('#agama_ibu').val("");
                $('#kewarganegaraan_ibu').val("");
                $('#pendidikan_ibu').val("");
                $('#pekerjaan_ibu').val("");
                $('#email_ibu').val("");
                $('#alamat_ortu').val("");
                $('#no_telepon_ayah').val("");
                $('#no_telepon_ibu').val("");
            }

            function clearDataWali() {
                $('#nama_wali').val("");
                $('#tempat_lahir_wali').val("");
                $('#tanggal_lahir_wali').val("");
                $('#agama_wali').val("");
                $('#kewarganegaraan_wali').val("");
                $('#pendidikan_wali').val("");
                $('#pekerjaan_wali').val("");
                $('#email_wali').val("");
            }
    </script>
@endpush
