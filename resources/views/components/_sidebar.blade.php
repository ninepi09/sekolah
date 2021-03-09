<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            @if ($mySekolah)
                @if ($mySekolah->logo)
                    <a href="/admin" class="d-flex" style="justify-content: center;">
                        <img class="img-fluid" src="{{ Storage::url($mySekolah->logo) }}" alt="logo sekolah" width="180" />
                    </a>
                @endif
                @if ($mySekolah->name)
                    <h3 style="color: white;" class="text-center mt-2">{{ $mySekolah->name }}</h3>
                @endif
            @endif
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="@if (request()->is('admin/peserta-didik/siswa') || request()->is('admin/peserta-didik/alumni') || request()->is('admin/peserta-didik/pindah-kelas') || request()->is('admin/peserta-didik/tidak-naik-kelas') || request()->is('admin/peserta-didik/siswa-pindahan') || request()->is('admin/peserta-didik/pengaturan-siswa-per-kelas')) pcoded-hasmenu pcoded-trigger active @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-graduation-cap"></i></span>
                        <span class="pcoded-mtext">Peserta Didik</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/peserta-didik/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.siswa.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/alumni') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.alumni') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Alumni</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/pindah-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.pindah-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pindah Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/tidak-naik-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.tidak-naik-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tidak Naik Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/siswa-pindahan') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.siswa-pindahan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa Pindahan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/pengaturan-siswa-per-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.pengaturan-siswa-per-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pengaturan Siswa Per Kelas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/pelanggaran/siswa') || request()->is('admin/pelanggaran/sanksi') || request()->is('admin/pelanggaran/kategori-pelanggaran')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-exclamation-triangle"></i></span>
                        <span class="pcoded-mtext">Pelanggaran</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pelanggaran/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelanggaran/sanksi') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.sanksi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Sanksi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelanggaran/kategori-pelanggaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.kategori-pelanggaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kategori Pelanggaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/e-voting/calon') || request()->is('admin/e-voting/posisi') || request()->is('admin/e-voting/pemilihan') || request()->is('admin/e-voting/vote')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-vote-yea"></i></span>
                        <span class="pcoded-mtext">E-Voting</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/e-voting/calon') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.calon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Calon</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-voting/posisi') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.posisi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Posisi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-voting/pemilihan') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.pemilihan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pemilihan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/fungsionaris/pegawai') || request()->is('admin/fungsionaris/guru')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user-tie"></i></span>
                        <span class="pcoded-mtext">Fungsionaris</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/fungsionaris/pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.fungsionaris.pegawai.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/fungsionaris/guru') ? 'active' : '' }}">
                            <a href="{{ route('admin.fungsionaris.guru') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Guru</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/pelajaran/mata-pelajaran') || request()->is('admin/pelajaran/jadwal-pelajaran')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext">Pelajaran</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pelajaran/mata-pelajaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelajaran.mata-pelajaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Mata Pelajaran</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelajaran/jadwal-pelajaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelajaran.jadwal-pelajaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jadwal Pelajaran</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="@if (request()->is('admin/absensi/siswa') || request()->is('admin/absensi/rekap-siswa')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-clipboard-list"></i></span>
                        <span class="pcoded-mtext">Absensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/absensi/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/absensi/rekap-siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.rekap-siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Rekap Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/daftar-nilai') ? 'active' : '' }}">
                     <a href="{{ route('admin.daftar-nilai') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-medal"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Nilai</span>
                    </a>
                </li>
                <li class="@if (request()->is('admin/referensi/bagian-pegawai') || request()->is('admin/referensi/semester') || request()->is('admin/referensi/status-guru') || request()->is('admin/referensi/pengaturan-hak-akses') || request()->is('admin/referensi/jenjang-pegawai') || request()->is('admin/referensi/tingkatan-kelas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-list-alt"></i></span>
                        <span class="pcoded-mtext">Referensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/referensi/bagian-pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.bagian-pegawai') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bagian Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/semester') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.semester') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Semester</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/status-guru') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.status-guru') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Status Guru</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/jenjang-pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.jenjang-pegawai') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jenjang Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/tingkatan-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.tingkatan-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tingkatan Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/pengaturan-hak-akses') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.pengaturan-hak-akses') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pengaturan Hak Akses</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/sekolah/jam') || request()->is('admin/fungsionaris/guru')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-school"></i></span>
                        <span class="pcoded-mtext">Sekolah</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/absensi/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/absensi/rekap-siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.rekap-siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jurusan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/sekolah/jam') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.jam') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jam Pelajaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/kalender/kalender-akademik')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-calendar"></i></span>
                        <span class="pcoded-mtext">Kalender</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/kalender/kalender-akademik') ? 'active' : '' }}">
                            <a href="{{ route('admin.kalender.kalender-akademik') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kalender Akademik</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('admin/pengumuman/pesan')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-bell"></i></span>
                        <span class="pcoded-mtext">Pengumuman</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pengumuman/pesan') ? 'active' : '' }}">
                            <a href="{{ route('admin.pengumuman.pesan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pesan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext">Perpustakaan</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#!" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">E-Book</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
