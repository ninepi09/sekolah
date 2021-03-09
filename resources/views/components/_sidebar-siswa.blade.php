<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('siswa') ? 'active' : '' }}">
                    <a href="{{ route('siswa.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                <li class="{{ request()->is('siswa/pelanggaran') ? 'active' : '' }}">
                    <a href="{{ route('siswa.pelanggaran.pelanggaran') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-exclamation-triangle"></i>
                        </span>
                        <span class="pcoded-mtext">Pelanggaran</span>
                    </a>
                </li>
                </li>
                <li class="{{ request()->is('siswa/e-voting') ? 'active' : '' }}">
                    <a href="{{ route('siswa.e-voting.e-voting') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-vote-yea"></i>
                        </span>
                        <span class="pcoded-mtext">E-Voting</span>
                    </a>
                </li>

                <li class="{{ request()->is('siswa/pelajaran') ? 'active' : '' }}">
                    <a href="{{ route('siswa.pelajaran.jadwal-pelajaran') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-vote-yea"></i>
                        </span>
                        <span class="pcoded-mtext">Jadwal Pelajaran</span>
                    </a>
                </li>

                <li class="{{ request()->is('siswa/kalender') ? 'active' : '' }}">
                    <a href="{{ route('siswa.kalender.kalender-akademik') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <span class="pcoded-mtext">Kalender</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/pengumuman') ? 'active' : '' }}">
                     <a href="{{ route('siswa.pengumuman.pengumuman') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-bell"></i>
                        </span>
                        <span class="pcoded-mtext">Pengumuman</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/perpustakaan') ? 'active' : '' }}">
                    <a href="{{ route('siswa.perpustakaan.perpustakaan') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-book"></i>
                        </span>
                        <span class="pcoded-mtext">Perpustakaan</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/cbt') ? 'active' : '' }}">
                     <a href="{{ route('siswa.cbt.cbt-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-vote-yea"></i>
                        </span>
                        <span class="pcoded-mtext">CBT</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/elearning') ? 'active' : '' }}">
                    <a href="{{ route('siswa.elearning.elearning-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-desktop"></i>
                        </span>
                        <span class="pcoded-mtext">E-Learning</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/leaderboard') ? 'active' : '' }}">
                    <a href="{{ route('siswa.leaderboard.leaderboard-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-crown"></i>
                        </span>
                        <span class="pcoded-mtext">Leaderboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/nilai') ? 'active' : '' }}">
                     <a href="{{ route('siswa.nilai.nilai-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-medal"></i>
                        </span>
                        <span class="pcoded-mtext">Nilai</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/forum') ? 'active' : '' }}">
                     <a href="{{ route('siswa.forum.forum-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-clipboard"></i>
                        </span>
                        <span class="pcoded-mtext">Forum</span>
                    </a>
                </li>
                <li class="{{ request()->is('siswa/logout') ? 'active' : '' }}">
                     <a href="{{ route('siswa.logout.logout-siswa') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-power-off"></i>
                        </span>
                        <span class="pcoded-mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
