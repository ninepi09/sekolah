@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Referensi | Pengaturan Hak Akses')
@section('title-2', 'Pengaturan Hak Akses')
@section('title-3', 'Pengaturan Hak Akses')

@section('describ')
    Ini adalah halaman pengaturan hak akses untuk admin
@endsection

@section('icon-l', 'fa fa-list-alt')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.referensi.pengaturan-hak-akses') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="toolbar">
                            <h6>Keterangan :</h6>
                            <ol>
                                <div class="row">
                                    <div class="col-md-4">
                                        <li>KA : Kalender</li>
                                        <li>SE : Sekolah</li>
                                        <li>PEL : Pelajaran</li>
                                        <li>PD : Peserta Didik</li>
                                        <li>AB : Absensi</li>
                                        <li>DN : Daftar Nilai</li>
                                    </div>
                                    <div class="col-md-4">
                                        <li>PLG : Pelanggaran</li>
                                        <li>TE : Template</li>
                                        <li>LU : Log User</li>
                                        <li>R : Referensi</li>
                                        <li>BT : Buku Tamu</li>
                                        <li>KO : Konsultasi</li>
                                    </div>
                                    <div class="col-md-4">
                                        <li>PER : Perpustakaan</li>
                                        <li>KE : Keuangan</li>
                                        <li>S&P : Sarana & Prasarana</li>
                                        <li>PMB : Penerimaan Murid Baru</li>
                                        <li>USBK : Ujian Sekolah Berbasis Komputer</li>
                                        <li>EVO : E-voting</li>
                                    </div>
                                </div>
                            </ol>
                        </div>
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                                <thead>
                                    <tr class="text-left">
                                    <th>Nama</th>
                                    <th title="Kalender">KA</th>
                                    <th title="Sekolah">SE</th>
                                    <th title="Pelajaran">PEL</th>
                                    <th title="Peserta Didik">PD</th>
                                    <th title="Absensi">AB</th>
                                    <th title="Daftar Nilai">DN</th>
                                    <th title="Pelanggaran">PLG</th>
                                    <th title="Template">TE</th>
                                    <th title="Log User">LU</th>
                                    <th title="Referensi">R</th>
                                    <th title="Buku Tamu">BT</th>
                                    <th title="Perpustakaan">PER</th>
                                    <th title="Keuangan">KE</th>
                                    <th title="Sarana & Prasarana">S&P</th>
                                    <th title="Penerimaan Murid Baru">PMB</th>
                                    <th title="Ujian Sekolah Berbasis Komputer">USBK</th>
                                    <th title="E-voting">EVO</th>
                                    <th title="Konsultasi">KO</th>
                                </tr>
                                </thead>
                                <tbody  class="text-left">
                                    <tr>
                                        <td>Al Firah</br> (Guru / Pegawai)</td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked id="kalender1" onclick="check('5935745', '#kalender1', 'kalender');">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sekolah1" onclick="check('5935745', '#sekolah1', 'sekolah');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="pelajaran1" onclick="check('5935745', '#pelajaran1', 'pelajaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="peserta_didik1" onclick="check('5935745', '#peserta_didik1', 'peserta_didik');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="absensi1" onclick="check('5935745', '#absensi1', 'absensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="daftar_nilai1" onclick="check('5935745', '#daftar_nilai1', 'daftar_nilai');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pelanggaran1" onclick="check('5935745', '#pelanggaran1', 'pelanggaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="template1" onclick="check('5935745', '#template1', 'template');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="log_user1" onclick="check('5935745', '#log_user1', 'log_user');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="referensi1" onclick="check('5935745', '#referensi1', 'referensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="buku_tamu1" onclick="check('5935745', '#buku_tamu1', 'buku_tamu');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="perpustakaan1" onclick="check('5935745', '#perpustakaan1', 'perpustakaan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="keuangan1" onclick="check('5935745', '#keuangan1', 'keuangan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sarana_prasarana1" onclick="check('5935745', '#sarana_prasarana1', 'sarana_prasarana');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pmb1" onclick="check('5935745', '#pmb1', 'pmb');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="usbk1" onclick="check('5935745', '#usbk1', 'usbk');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="evo1" onclick="check('5935745', '#evo1', 'evoting');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="konsultasi1" onclick="check('5935745', '#konsultasi1', 'konsultasi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arifin Sitorus Pane</br> (Guru / Pegawai)</td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked id="kalender1" onclick="check('5935745', '#kalender1', 'kalender');">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sekolah1" onclick="check('5935745', '#sekolah1', 'sekolah');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="pelajaran1" onclick="check('5935745', '#pelajaran1', 'pelajaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="peserta_didik1" onclick="check('5935745', '#peserta_didik1', 'peserta_didik');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="absensi1" onclick="check('5935745', '#absensi1', 'absensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="daftar_nilai1" onclick="check('5935745', '#daftar_nilai1', 'daftar_nilai');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pelanggaran1" onclick="check('5935745', '#pelanggaran1', 'pelanggaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="template1" onclick="check('5935745', '#template1', 'template');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="log_user1" onclick="check('5935745', '#log_user1', 'log_user');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="referensi1" onclick="check('5935745', '#referensi1', 'referensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="buku_tamu1" onclick="check('5935745', '#buku_tamu1', 'buku_tamu');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="perpustakaan1" onclick="check('5935745', '#perpustakaan1', 'perpustakaan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="keuangan1" onclick="check('5935745', '#keuangan1', 'keuangan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sarana_prasarana1" onclick="check('5935745', '#sarana_prasarana1', 'sarana_prasarana');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pmb1" onclick="check('5935745', '#pmb1', 'pmb');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="usbk1" onclick="check('5935745', '#usbk1', 'usbk');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="evo1" onclick="check('5935745', '#evo1', 'evoting');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="konsultasi1" onclick="check('5935745', '#konsultasi1', 'konsultasi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Astika Andryani Nst</br> (Guru / Pegawai)</td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked id="kalender1" onclick="check('5935745', '#kalender1', 'kalender');">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sekolah1" onclick="check('5935745', '#sekolah1', 'sekolah');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="pelajaran1" onclick="check('5935745', '#pelajaran1', 'pelajaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="peserta_didik1" onclick="check('5935745', '#peserta_didik1', 'peserta_didik');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="absensi1" onclick="check('5935745', '#absensi1', 'absensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="daftar_nilai1" onclick="check('5935745', '#daftar_nilai1', 'daftar_nilai');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pelanggaran1" onclick="check('5935745', '#pelanggaran1', 'pelanggaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="template1" onclick="check('5935745', '#template1', 'template');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="log_user1" onclick="check('5935745', '#log_user1', 'log_user');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="referensi1" onclick="check('5935745', '#referensi1', 'referensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="buku_tamu1" onclick="check('5935745', '#buku_tamu1', 'buku_tamu');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="perpustakaan1" onclick="check('5935745', '#perpustakaan1', 'perpustakaan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="keuangan1" onclick="check('5935745', '#keuangan1', 'keuangan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sarana_prasarana1" onclick="check('5935745', '#sarana_prasarana1', 'sarana_prasarana');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pmb1" onclick="check('5935745', '#pmb1', 'pmb');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="usbk1" onclick="check('5935745', '#usbk1', 'usbk');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="evo1" onclick="check('5935745', '#evo1', 'evoting');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="konsultasi1" onclick="check('5935745', '#konsultasi1', 'konsultasi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lestari Juwita</br> (Guru / Pegawai)</td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked id="kalender1" onclick="check('5935745', '#kalender1', 'kalender');">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sekolah1" onclick="check('5935745', '#sekolah1', 'sekolah');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="pelajaran1" onclick="check('5935745', '#pelajaran1', 'pelajaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="peserta_didik1" onclick="check('5935745', '#peserta_didik1', 'peserta_didik');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="absensi1" onclick="check('5935745', '#absensi1', 'absensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="daftar_nilai1" onclick="check('5935745', '#daftar_nilai1', 'daftar_nilai');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pelanggaran1" onclick="check('5935745', '#pelanggaran1', 'pelanggaran');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="template1" onclick="check('5935745', '#template1', 'template');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="log_user1" onclick="check('5935745', '#log_user1', 'log_user');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="referensi1" onclick="check('5935745', '#referensi1', 'referensi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="buku_tamu1" onclick="check('5935745', '#buku_tamu1', 'buku_tamu');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="perpustakaan1" onclick="check('5935745', '#perpustakaan1', 'perpustakaan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="keuangan1" onclick="check('5935745', '#keuangan1', 'keuangan');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="sarana_prasarana1" onclick="check('5935745', '#sarana_prasarana1', 'sarana_prasarana');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"  id="pmb1" onclick="check('5935745', '#pmb1', 'pmb');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="usbk1" onclick="check('5935745', '#usbk1', 'usbk');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="evo1" onclick="check('5935745', '#evo1', 'evoting');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked id="konsultasi1" onclick="check('5935745', '#konsultasi1', 'konsultasi');">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
            $('#order-table').DataTable();
        });
    </script>
@endpush