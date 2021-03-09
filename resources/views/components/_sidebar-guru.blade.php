<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('guru') ? 'active' : '' }}">
                    <a href="{{ route('guru.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                    <li class="@if (request()->is('guru/absensi/guru') || request()->is('guru/absensi/rekap-siswa')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                        <a href="javascript:void(0);" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-clipboard-list"></i></span>
                            <span class="pcoded-mtext">Absensi</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="{{ request()->is('guru/absensi/siswa') ? 'active' : '' }}">
                                <a href="{{ route('guru.absensi.siswa') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Siswa 2</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('guru/absensi/rekap-siswa') ? 'active' : '' }}">
                                <a href="{{ route('guru.absensi.rekap-siswa') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Rekap Siswa</span>
                                </a>
                            </li>
                        </ul>
                    </li>

            </ul>
        </div>
    </div>
</nav>
