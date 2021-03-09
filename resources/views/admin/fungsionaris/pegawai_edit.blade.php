@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Fungsionaris | Pegawai')
@section('title-2', 'Pegawai')
@section('title-3', 'Pegawai')

@section('describ')
    Ini adalah halaman pegawai untuk admin
@endsection

@section('icon-l', 'icon-people')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.fungsionaris.pegawai.index') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <form id="updateForm" action="{{ route('admin.fungsionaris.pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @method("PUT")
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nama_pegawai">Nama Lengkap</label>
                                            <input type="text" value="{{ $pegawai->name }}" name="nama_pegawai" id="nama_pegawai" class="form-control form-control-sm" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nip">NIP</label>
                                            <input id="nip" value="{{ $pegawai->nip }}" name="nip" class="form-control form-control-sm" type="text" placeholder="NIP" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input value="{{ $pegawai->nik }}" id="nik" name="nik" class="form-control form-control-sm" type="text" placeholder="NIK" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="gelar_depan">Gelar Depan</label>
                                            <input id="gelar_depan" name="gelar_depan" class="form-control form-control-sm" type="text" placeholder="Gelar Depan" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="gelar_belakang">Gelar Belakang</label>
                                            <input value="{{ $pegawai->gelar_belakang }}" id="gelar_belakang" name="gelar_belakang" class="form-control form-control-sm" type="text" placeholder="Gelar Belakang" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input value="{{ $pegawai->tempat_lahir }}" type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input value="{{ $pegawai->tanggal_lahir }}" type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm" placeholder="Tanggal Lahir" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select name="jk" id="jk" class="form-control form-control-sm" autocomplete="off">
                                                <option value="">-- Jenis Kelamin --</option>
                                                <option value="Laki-Laki" {{ $pegawai->jk == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                                <option value="Perempuan"{{ $pegawai->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <?php $agamas = ['Islam', 'Budha', ' Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu']; ?>
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control form-control-sm">
                                                <option value="">-- Agama --</option>
                                                @foreach ($agamas as $agama)
                                                    <option value="{{ $agama }}" {{ $pegawai->agama == $agama ? 'selected' : '' }}>{{ $agama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="is_menikah">Status Menikah</label>
                                            <select name="is_menikah" id="is_menikah" class="form-control form-control-sm">
                                                <option value="">-- Status Menikah --</option>
                                                <option value="1" {{ $pegawai->is_menikah == 1 ? 'selected' : '' }}>Menikah</option>
                                                <option value="0" {{ $pegawai->is_menikah == 0 ? 'selected' : '' }}>Belum Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="alamat_tinggal">Alamat Tinggal</label>
                                            <textarea name="alamat_tinggal" id="alamat_tinggal" cols="10" rows="3" class="form-control form-control-sm" placeholder="Alamat Tinggal">{{ $pegawai->alamat_tinggal }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                                <option value="">-- Provinsi --</option>
                                                <option value="Aceh" {{ $pegawai->provinsi == 'Aceh' ? 'selected' : '' }}>Aceh</option>
                                                <option value="Sumatera Utara" {{ $pegawai->provinsi == 'Sumatera Utara' ? 'selected' : '' }}>Sumatera Utara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="kabupaten">Kabupaten</label>
                                            <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                                <option value="">-- Kabupaten --</option>
                                                <option value="Langkat" {{ $pegawai->kabupaten == 'Langkat' ? 'selected' : '' }}>Langkat</option>
                                                <option value="Deli Serdang" {{ $pegawai->kabupaten == 'Deli Serdang' ? 'selected' : '' }}>Deli Serdang</option>
                                                <option value="Medan" {{ $pegawai->kabupaten == 'Medan' ? 'selected' : '' }}>Medan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
                                                <option value="">-- Kecamatan --</option>
                                                <option value="Besitang" {{ $pegawai->kecamatan == 'Besitang' ? 'selected' : '' }}>Besitang</option>
                                                <option value="Medan Kota" {{ $pegawai->kecamatan == 'Medan Kota' ? 'selected' : '' }}>Medan Kota</option>
                                                <option value="Medan Selayang" {{ $pegawai->kecamatan == 'Medan Selayang' ? 'selected' : '' }}>Medan Selayang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="dusun">Dusun</label>
                                            <input value="{{ $pegawai->dusun }}" type="text" name="dusun" id="dusun" class="form-control form-control-sm" placeholder="Dusun">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="rt">RT</label>
                                            <input value="{{ $pegawai->rt }}" type="text" name="rt" id="rt" class="form-control form-control-sm" placeholder="RT">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="rw">RW</label>
                                            <input value="{{ $pegawai->rw }}" type="text" name="rw" id="rw" class="form-control form-control-sm" placeholder="RW">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <input value="{{ $pegawai->kode_pos }}" type="text" name="kode_pos" id="kode_pos" class="form-control form-control-sm" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="no_telepon_rumah">No. Telp Rumah</label>
                                            <input value="{{ $pegawai->no_telepon_rumah }}" type="text" name="no_telepon_rumah" id="no_telepon_rumah" class="form-control form-control-sm" placeholder="No. Telp Rumah">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="no_telepon">No. Telp</label>
                                            <input value="{{ $pegawai->no_telepon }}" type="text" name="no_telepon" id="no_telepon" class="form-control form-control-sm" placeholder="No. Telp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">E-Mail</label>
                                            <input value="{{ $pegawai->email }}" type="email" name="email" id="email" class="form-control form-control-sm" placeholder="E-Mail">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="foto">
                                                Foto Pegawai
                                            </label>
                                            <input type="file" name="foto" id="foto" class="form-control form-control-sm">
                                            <br>
                                            <small class="text-muted">hanya jika update (max. 2MB)</small>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5>Informasi Pekerjaan</h5>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="tanggal_mulai">Tanggal Mulai:</label>
                                            <input value="{{ $pegawai->tanggal_mulai }}" id="tanggal_mulai" name="tanggal_mulai" class="form-control form-control-sm" type="text" placeholder="Tanggal Mulai Tugas" readonly />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bagian">Bagian Pegawai</label>
                                            <select name="bagian" id="bagian" class="form-control form-control-sm" required>
                                                <option value="">-- Bagian Pegawai --</option>
                                                <option value="Guru/Tenaga Pendidik" {{ $pegawai->bagian == 'Guru/Tenaga Pendidik' ? 'selected' : '' }}>Guru/Tenaga Pendidik</option>
                                                <option value="Teknisi" {{ $pegawai->bagian == 'Teknisi' ? 'selected' : '' }}>Teknisi</option>
                                                <option value="Laboran" {{ $pegawai->bagian == 'Laboran' ? 'selected' : '' }}>Laboran</option>
                                                <option value="Tenaga Kependidikan" {{ $pegawai->bagian == 'Tenaga Kependidikan' ? 'selected' : '' }}>Tenaga Kependidikan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="tahun_ajaran">Tahun Ajaran</label>
                                            <select name="tahun_ajaran" id="tahun_ajaran" class="form-control form-control-sm">
                                                <option value="">-- Tahun Ajaran --</option>
                                                <option value="2017/2018" {{ $pegawai->tahun_ajaran == '2017/2018' ? 'selected' : '' }}>2017/2018</option>
                                                <option value="2018/2019" {{ $pegawai->tahun_ajaran == '2018/2019' ? 'selected' : '' }}>2018/2019</option>
                                                <option value="2019/2020" {{ $pegawai->tahun_ajaran == '2019/2020' ? 'selected' : '' }}>2019/2020</option>
                                                <option value="2020/2021" {{ $pegawai->tahun_ajaran == '2020/2021' ? 'selected' : '' }}>2020/2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <select name="semester" id="semester" class="form-control form-control-sm">
                                                <option value="">-- Semester --</option>
                                                <option value="Ganjil" {{ $pegawai->semester == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                                                <option value="Genap" {{ $pegawai->semester == 'Genap' ? 'selected' : '' }}>Genap</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-outline-success">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- addons css --}}
@push('css')
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
    <script src="{{ asset('bower_components/datedropper/js/datedropper.min.js') }}"></script>
    <script>
        const dateOptions = {
            theme: 'leaf',
            format: 'Y-m-d'
        };

        $(document).ready(function () {

            $('#tanggal_lahir').dateDropper(dateOptions);
            $('#tanggal_mulai').dateDropper(dateOptions);
        });

        const updateForm = (e) => {
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("password_confirmation");
            let errMsg;

            if (password.value != confirmPassword.value) {
                errMsg = 'Maaf, konfirmasi password belum sama pada data login pegawai';
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
    </script>
@endpush
