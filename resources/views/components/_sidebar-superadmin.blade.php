<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('superadmin') ? 'active' : '' }}">
                    <a href="{{ route('superadmin.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('superadmin/slider') ? 'active' : '' }}">
                    <a href="{{ route('superadmin.slider') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-list"></i>
                        </span>
                        <span class="pcoded-mtext">Slider</span>
                    </a>
                </li>
                <li class="{{ request()->is('superadmin/list-sekolah') ? 'active' : '' }}">
                    <a href="{{ route('superadmin.list-sekolah') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">List Sekolah</span>
                    </a>
                </li>
                <li class="@if (request()->is('superadmin/library') || request()->is('superadmin/library/setting')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-book-open"></i>
                        </span>
                        <span class="pcoded-mtext">Library</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('superadmin/library') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.library.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tambah Baru</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/library/setting') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.library-setting') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Setting</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if (request()->is('superadmin/referensi/jenis-kelamin') || request()->is('superadmin/referensi/agama') || request()->is('superadmin/referensi/status-nikah') || request()->is('superadmin/referensi/provinsi') || request()->is('superadmin/referensi/kabupaten-kota') || request()->is('superadmin/referensi/kecamatan') || request()->is('superadmin/referensi/suku')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">Referensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('superadmin/referensi/jenis-kelamin') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.jenis-kelamin') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jenis Kelamin</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/agama') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.agama') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Agama</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/status-nikah') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.status-nikah') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Status Nikah</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/provinsi') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.provinsi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Provinsi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/kabupaten-kota') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.kabupaten-kota') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kabupaten/Kota</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/kecamatan') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.kecamatan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kecamatan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('superadmin/referensi/suku') ? 'active' : '' }}">
                            <a href="{{ route('superadmin.referensi.suku') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Suku</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>