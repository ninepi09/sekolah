<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('orangtua') ? 'active' : '' }}">
                    <a href="{{ route('orangtua.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                <li class="{{ request()->is('orangtua/pelanggaran') ? 'active' : '' }}">
                    <a href="{{ route('orangtua.pelanggaran.pelanggaran') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-exclamation-triangle"></i>
                        </span>
                        <span class="pcoded-mtext">Pelanggaran</span>
                    </a>
                </li>
                <li class="{{ request()->is('orangtua/kalender') ? 'active' : '' }}">
                    <a href="{{ route('orangtua.kalender.kalender-akademik') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <span class="pcoded-mtext">Kalender</span>
                    </a>
                </li>
                <li class="{{ request()->is('orangtua/pengumuman') ? 'active' : '' }}">
                     <a href="{{ route('orangtua.pengumuman.pengumuman') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-bell"></i>
                        </span>
                        <span class="pcoded-mtext">Pengumuman</span>
                    </a>
                </li>
                <li class="{{ request()->is('orangtua/absensi') ? 'active' : '' }}">
                     <a href="{{ route('orangtua.absensi.absensi') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-check"></i>
                        </span>
                        <span class="pcoded-mtext">Absensi</span>
                    </a>
                </li>
                <li class="{{ request()->is('orangtua/nilai') ? 'active' : '' }}">
                     <a href="{{ route('orangtua.nilai.nilai-orangtua') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-medal"></i>
                        </span>
                        <span class="pcoded-mtext">Nilai</span>
                    </a>
                </li>
                </ul>
        </div>
    </div>
</nav>