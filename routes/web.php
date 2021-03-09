<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Artisan success";
});

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return "Artisan success";
});

Route::get('/db-seed', function () {
    Artisan::call('db:seed');
    return "Artisan success";
});

Route::get('/dbal', function () {
    shell_exec('composer require doctrine/dbal');
    return "Composer success";
});

Route::namespace('Guru')
    ->name('guru.')
    ->group(function () {
        Route::get('/guru', 'GuruController@index')
            ->name('index');

        Route::get('/guru/absensi/siswaguru', 'Absensi\SiswaGuruController@index')
        ->name('absensi.siswa');
    Route::post('/guru/absensi/siswa', 'Absensi\SiswaGuruController@write')
        ->name('absensi.siswa.write');
    Route::get('/guru/absensi/rekap-siswaguru', 'Absensi\RekapSiswaGuruController@index')
        ->name('absensi.rekap-siswa');


});

Route::namespace('Siswa')
    ->name('siswa.')
    ->group(function () {
        Route::get('/siswa', 'SiswaController@index')
            ->name('index');

             Route::get('/siswa/pelajaran', 'Pelajaran\MataPelajaranSiswaController@index')
             ->name('pelajaran.mata-pelajaran');
             // Route::get('/siswa/pelajaran', 'Pelajaran\MataPelajaranSiswaController@write')
             // ->name('pelajaran.mata-pelajaran.write');

             // Jadwal Pelajaran
             Route::get('/siswa/pelajaran/jadwal-pelajaran', 'Pelajaran\JadwalPelajaranSiswaController@index')
             ->name('pelajaran.jadwal-pelajaran');
         Route::post('/siswa/pelajaran/jadwal-pelajaran', 'Pelajaran\JadwalPelajaranSiswaController@write')
             ->name('pelajaran.jadwal-pelajaran.write');

        //evoting
        Route::get('/siswa/e-voting', 'EVoting\EVotingController@index')
            ->name('e-voting.e-voting');

        //bang adek
        Route::get('/siswa/pelajaran', 'Pelajaran\MataPelajaranSiswaController@index')
            ->name('pelajaran.mata-pelajaran');
        // Route::get('/siswa/pelajaran', 'Pelajaran\MataPelajaranSiswaController@write')
        // ->name('pelajaran.mata-pelajaran.write');

        // Jadwal Pelajaran
        Route::get('/siswa/pelajaran/jadwal-pelajaran', 'Pelajaran\JadwalPelajaranSiswaController@index')
            ->name('pelajaran.jadwal-pelajaran');
        Route::post('/siswa/pelajaran/jadwal-pelajaran', 'Pelajaran\JadwalPelajaranSiswaController@write')
            ->name('pelajaran.jadwal-pelajaran.write');

        Route::get('/siswa/kalender', 'Kalender\KalenderAkademikController@index')
            ->name('kalender.kalender-akademik');

        Route::get('/siswa/pengumuman', 'Pengumuman\PengumumanController@index')
            ->name('pengumuman.pengumuman');

        Route::get('/siswa/pelanggaran', 'Pelanggaran\SiswaController@index')
            ->name('pelanggaran.pelanggaran');

        Route::get('/siswa/perpustakaan', 'Perpustakaan\PerpustakaanController@index')
            ->name('perpustakaan.perpustakaan');

        Route::get('/siswa/cbt', 'Cbt\CbtSiswaController@index')
            ->name('cbt.cbt-siswa');

        Route::get('/siswa/elearning', 'Elearning\ElearningSiswaController@index')
            ->name('elearning.elearning-siswa');

        Route::get('/siswa/leaderboard', 'Leaderboard\LeaderboardSiswaController@index')
            ->name('leaderboard.leaderboard-siswa');

        Route::get('/siswa/nilai', 'Nilai\NilaiSiswaController@index')
            ->name('nilai.nilai-siswa');

        Route::get('/siswa/forum', 'Forum\ForumSiswaController@index')
            ->name('forum.forum-siswa');

        Route::get('/siswa/logout', 'Logout\LogoutSiswaController@index')
            ->name('logout.logout-siswa');
    });

Route::namespace('Orangtua')
    ->name('orangtua.')
    ->group(function () {
        Route::get('/orangtua', 'OrangtuaController@index')
            ->name('index');

        Route::get('/orangtua/pelanggaran', 'Pelanggaran\OrangtuaController@index')
            ->name('pelanggaran.pelanggaran');

        Route::get('/orangtua/kalender', 'Kalender\KalenderAkademikController@index')
            ->name('kalender.kalender-akademik');

        Route::get('/orangtua/pengumuman', 'Pengumuman\PengumumanController@index')
            ->name('pengumuman.pengumuman');

        Route::get('/orangtua/absensi', 'Absensi\AbsensiController@index')
            ->name('absensi.absensi');

        Route::get('/orangtua/nilai', 'Nilai\NilaiOrangtuaController@index')
            ->name('nilai.nilai-orangtua');
    });

Route::namespace('Superadmin')
    ->name('superadmin.')
    ->middleware(['auth', 'auth.superadmin'])
    ->group(function () {
        Route::get('/superadmin', 'SuperadminController@index')
            ->name('index');

        Route::get('/superadmin/slider', 'SliderController@index')
            ->name('slider');

        Route::get('/superadmin/list-sekolah', 'ListSekolahController@index')
            ->name('list-sekolah');
        Route::post('/superadmin/list-sekolah', 'ListSekolahController@store');
        Route::get('/superadmin/list-sekolah/{id}', 'ListSekolahController@edit');
        Route::post('/superadmin/list-sekolah/update', 'ListSekolahController@update')
            ->name('list-sekolah-update');
        Route::get('/superadmin/list-sekolah/hapus/{id}', 'ListSekolahController@destroy');


        // Referensi
        Route::namespace('Referensi')
            ->group(function () {
                // Jenis Kelamin
                Route::get('/superadmin/referensi/jenis-kelamin', 'JenisKelaminController@index')
                    ->name('referensi.jenis-kelamin');
                Route::post('/superadmin/referensi/jenis-kelamin', 'JenisKelaminController@store');
                Route::get('/superadmin/referensi/jenis-kelamin/{id}', 'JenisKelaminController@edit');
                Route::post('/superadmin/referensi/jenis-kelamin/update', 'JenisKelaminController@update')
                    ->name('referensi.jenis-kelamin-update');
                Route::get('/superadmin/referensi/jenis-kelamin/hapus/{id}', 'JenisKelaminController@destroy');

                // Agama
                Route::get('/superadmin/referensi/agama', 'AgamaController@index')
                    ->name('referensi.agama');
                Route::post('/superadmin/referensi/agama', 'AgamaController@store');
                Route::get('/superadmin/referensi/agama/{id}', 'AgamaController@edit');
                Route::post('/superadmin/referensi/agama/update', 'AgamaController@update')
                    ->name('referensi.agama-update');
                Route::get('/superadmin/referensi/agama/hapus/{id}', 'AgamaController@destroy');

                // Status Nikah
                Route::get('/superadmin/referensi/status-nikah', 'StatusNikahController@index')
                    ->name('referensi.status-nikah');
                Route::post('/superadmin/referensi/status-nikah', 'StatusNikahController@store');
                Route::get('/superadmin/referensi/status-nikah/{id}', 'StatusNikahController@edit');
                Route::post('/superadmin/referensi/status-nikah/update', 'StatusNikahController@update')
                    ->name('referensi.status-nikah-update');
                Route::get('/superadmin/referensi/status-nikah/hapus/{id}', 'StatusNikahController@destroy');

                // Provinsi
                Route::get('/superadmin/referensi/provinsi', 'ProvinsiController@index')
                    ->name('referensi.provinsi');
                Route::post('/superadmin/referensi/provinsi', 'ProvinsiController@store');
                Route::get('/superadmin/referensi/provinsi/{id}', 'ProvinsiController@edit');
                Route::post('/superadmin/referensi/provinsi/update', 'ProvinsiController@update')
                    ->name('referensi.provinsi-update');
                Route::get('/superadmin/referensi/provinsi/hapus/{id}', 'ProvinsiController@destroy');

                // Kabupaten/Kota
                Route::get('/superadmin/referensi/kabupaten-kota', 'KabupatenKotaController@index')
                    ->name('referensi.kabupaten-kota');
                Route::post('/superadmin/referensi/kabupaten-kota', 'KabupatenKotaController@store');
                Route::get('/superadmin/referensi/kabupaten-kota/{id}', 'KabupatenKotaController@edit');
                Route::post('/superadmin/referensi/kabupaten-kota/update', 'KabupatenKotaController@update')
                    ->name('referensi.kabupaten-kota-update');
                Route::get('/superadmin/referensi/kabupaten-kota/hapus/{id}', 'KabupatenKotaController@destroy');

                // Kecamatan
                Route::get('/superadmin/referensi/kecamatan', 'KecamatanController@index')
                    ->name('referensi.kecamatan');
                Route::post('/superadmin/referensi/kecamatan', 'KecamatanController@store');
                Route::get('/superadmin/referensi/kecamatan/{id}', 'KecamatanController@edit');
                Route::post('/superadmin/referensi/kecamatan/update', 'KecamatanController@update')
                    ->name('referensi.kecamatan-update');
                Route::get('/superadmin/referensi/kecamatan/hapus/{id}', 'KecamatanController@destroy');

                // Suku
                Route::get('/superadmin/referensi/suku', 'SukuController@index')
                    ->name('referensi.suku');
                Route::post('/superadmin/referensi/suku', 'SukuController@store');
                Route::get('/superadmin/referensi/suku/{id}', 'SukuController@edit');
                Route::post('/superadmin/referensi/suku/update', 'SukuController@update')
                    ->name('referensi.suku-update');
                Route::get('/superadmin/referensi/suku/hapus/{id}', 'SukuController@destroy');
            });

        // Library Setting
        Route::namespace('Library')
            ->group(function () {
                Route::get('/superadmin/library/setting', 'SettingController@index')
                    ->name('library-setting');
                Route::post('/superadmin/library/setting/tipe', 'SettingController@tipeStore')
                    ->name('library-tipe');
                Route::get('/superadmin/library/setting/tipe/{id}', 'SettingController@editTipe');
                Route::put('/superadmin/library/setting/tipe/update', 'SettingController@updateTipe')
                    ->name('library-tipe-update');
                Route::delete('/superadmin/library/tipe/delete/{id}', 'SettingController@deleteTipe')
                    ->name('library-tipe-delete');

                Route::get('/superadmin/library', 'TambahController@index')
                    ->name('library');
            });
    });

Route::namespace('Superadmin')
    ->name('superadmin.')
    ->prefix('superadmin')
    ->middleware(['auth', 'auth.superadmin'])
    ->group(function () {
        Route::get('/', 'SuperadminController@index')->name('index');

        Route::resource('library', 'Library\TambahController');
        Route::namespace('Library')
            ->group(function () {
                Route::resource('library-kategori', 'KategoriController');
                Route::resource('library-penulis', 'PenulisController');
                Route::resource('library-penerbit', 'PenerbitController');
                Route::resource('library-tingkat', 'TingkatController');
            });
    });

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware(['auth', 'auth.admin'])
    ->group(function () {
        Route::get('/', 'AdminController@index')->name('index');
        Route::get('/siswa-by-tahun', 'AdminController@getSiswasByTahun')->name('siswa.by.tahun');

        // Peserta Didik
        // Route -> Admin/PesertaDidik
        // url /admin/peserta-didik
        Route::namespace('PesertaDidik')
            ->prefix('peserta-didik')
            ->name('pesertadidik.')
            ->group(function () {
                Route::resource('siswa', 'SiswaController');
            });

        // Fungsionaris
        // Route -> Admin/Fungsionaris
        // url /admin/fungsionaris
        Route::namespace('Fungsionaris')
            ->prefix('fungsionaris')
            ->name('fungsionaris.')
            ->group(function () {
                Route::resource('pegawai', 'PegawaiController');
            });
    });




Route::namespace('Admin')
    ->name('admin.')
    ->middleware(['auth', 'auth.admin'])
    ->group(function () {
        Route::get('/admin', 'AdminController@index')
            ->name('index');
        Route::get('/siswa-by-tahun', 'AdminController@getSiswasByTahun')
            ->name('siswa.by.tahun');




        // Peserta Didik
        Route::namespace('PesertaDidik')
            ->group(function () {
                // Route::get('/admin/peserta-didik/siswa', 'SiswaController@index')
                //     ->name('pesertadidik.siswa');
                Route::get('/admin/peserta-didik/alumni', 'AlumniController@index')
                    ->name('pesertadidik.alumni');
                Route::get('/admin/peserta-didik/pindah-kelas', 'PindahKelasController@index')
                    ->name('pesertadidik.pindah-kelas');
                Route::get('/admin/peserta-didik/tidak-naik-kelas', 'TidakNaikKelasController@index')
                    ->name('pesertadidik.tidak-naik-kelas');
                Route::get('/admin/peserta-didik/pengaturan-siswa-per-kelas', 'PengaturanSiswaPerKelasController@index')
                    ->name('pesertadidik.pengaturan-siswa-per-kelas');
                Route::get('/admin/peserta-didik/siswa-pindahan', 'SiswaPindahanController@index')
                    ->name('pesertadidik.siswa-pindahan');
            });

        // Pelanggaran
        Route::namespace('Pelanggaran')
            ->group(function () {
                Route::get('/admin/pelanggaran/siswa', 'SiswaController@index')
                    ->name('pelanggaran.siswa');
                Route::post('/admin/pelanggaran/siswa', 'SiswaController@store');
                Route::get('/admin/pelanggaran/siswa/{id}', 'SiswaController@edit');
                Route::post('/admin/pelanggaran/siswa/update', 'SiswaController@update')
                    ->name('pelanggaran.siswa-update');
                Route::get('/admin/pelanggaran/siswa/hapus/{id}', 'SiswaController@destroy');

                Route::get('/admin/pelanggaran/kategori-pelanggaran', 'KategoriPelanggaranController@index')
                    ->name('pelanggaran.kategori-pelanggaran');
                Route::post('/admin/pelanggaran/kategori-pelanggaran', 'KategoriPelanggaranController@store');
                Route::get('/admin/pelanggaran/kategori-pelanggaran/{id}', 'KategoriPelanggaranController@edit');
                Route::post('/admin/pelanggaran/kategori-pelanggaran/update', 'KategoriPelanggaranController@update')
                    ->name('pelanggaran.kategori-pelanggaran-update');
                Route::get('/admin/pelanggaran/kategori-pelanggaran/hapus/{id}', 'KategoriPelanggaranController@destroy');

                Route::get('/admin/pelanggaran/sanksi', 'SanksiController@index')
                    ->name('pelanggaran.sanksi');
                Route::post('/admin/pelanggaran/sanksi', 'SanksiController@store');
                Route::get('/admin/pelanggaran/sanksi/{id}', 'SanksiController@edit');
                Route::post('/admin/pelanggaran/sanksi/update', 'SanksiController@update')
                    ->name('pelanggaran.sanksi-update');
                Route::get('/admin/pelanggaran/sanksi/hapus/{id}', 'SanksiController@destroy');
            });

        // E-Voting
        Route::namespace('EVoting')
            ->group(function () {
                Route::get('/admin/e-voting/calon', 'CalonController@index')
                    ->name('e-voting.calon');
                Route::post('/admin/e-voting/calon', 'CalonController@store');
                Route::get('/admin/e-voting/calon/{id}', 'CalonController@edit');
                Route::post('/admin/e-voting/calon/update', 'CalonController@update')
                    ->name('e-voting.calon-update');
                Route::get('/admin/e-voting/calon/hapus/{id}', 'CalonController@destroy');


                Route::get('/admin/e-voting/posisi', 'PosisiController@index')
                    ->name('e-voting.posisi');
                Route::post('/admin/e-voting/posisi', 'PosisiController@store');
                Route::get('/admin/e-voting/posisi/{id}', 'PosisiController@edit');
                Route::post('/admin/e-voting/posisi/update', 'PosisiController@update')
                    ->name('e-voting.posisi-update');
                Route::get('/admin/e-voting/posisi/hapus/{id}', 'PosisiController@destroy');



                Route::get('/admin/e-voting/pemilihan', 'PemilihanController@index')
                    ->name('e-voting.pemilihan');
                Route::post('/admin/e-voting/pemilihan', 'PemilihanController@store');
                Route::get('/admin/e-voting/pemilihan/{id}', 'PemilihanController@edit');
                Route::post('/admin/e-voting/pemilihan/update', 'PemilihanController@update')
                    ->name('e-voting.pemilihan-update');
                Route::get('/admin/e-voting/pemilihan/hapus/{id}', 'PemilihanController@destroy')->name('e-voting.pemilihan-destroy');

                Route::get('/admin/e-voting/vote', 'VoteController@index')
                    ->name('e-voting.vote');
                Route::post('/admin/e-voting/vote', 'VoteController@store');
                Route::get('/admin/e-voting/vote/{id}', 'VoteController@edit');
                Route::post('/admin/e-voting/vote/update', 'VoteController@update')
                    ->name('e-voting.vote-update');
                Route::get('/admin/e-voting/vote/hapus/{id}', 'VoteController@destroy');
            });

        // Fungsionaris
        Route::namespace('Fungsionaris')
            ->group(function () {
                Route::get('/admin/fungsionaris/guru', 'GuruController@index')
                    ->name('fungsionaris.guru');
                Route::post('/admin/fungsionaris/guru', 'GuruController@write')
                    ->name('fungsionaris.guru.write');
            });

             // Sekolah
         Route::namespace('Sekolah')
         ->group(function () {
             // Jam Pelajaran
             Route::get('/admin/sekolah/jam', 'JamPelajaranController@index')
                 ->name('sekolah.jam');
             Route::post('/admin/sekolah/jam', 'JamPelajaranController@write')
                 ->name('sekolah.jam.write');


         });

        // Pelajaran
        Route::namespace('Pelajaran')
            ->group(function () {
                // Pelajaran
                Route::get('/admin/pelajaran/mata-pelajaran', 'MataPelajaranController@index')
                    ->name('pelajaran.mata-pelajaran');
                Route::post('/admin/pelajaran/mata-pelajaran', 'MataPelajaranController@write')
                    ->name('pelajaran.mata-pelajaran.write');

                // Jadwal Pelajaran
                Route::get('/admin/pelajaran/jadwal-pelajaran', 'JadwalPelajaranController@index')
                    ->name('pelajaran.jadwal-pelajaran');
                Route::post('/admin/pelajaran/jadwal-pelajaran', 'JadwalPelajaranController@write')
                    ->name('pelajaran.jadwal-pelajaran.write');
            });

        // Absensi
        Route::namespace('Absensi')
            ->group(function () {
                Route::get('/admin/absensi/siswa', 'SiswaController@index')
                    ->name('absensi.siswa');
                Route::post('/admin/absensi/siswa', 'SiswaController@write')
                    ->name('absensi.siswa.write');
                Route::get('/admin/absensi/rekap-siswa', 'RekapSiswaController@index')
                    ->name('absensi.rekap-siswa');
            });

        // Daftar Nilai
        Route::namespace('DaftarNilai')
            ->group(function () {
                Route::get('/admin/daftar-nilai', 'DaftarNilaiController@index')
                    ->name('daftar-nilai');
            });

        // Referensi
        Route::namespace('Referensi')
            ->group(function () {
                // Bagian Pegawai
                Route::get('/admin/referensi/bagian-pegawai', 'BagianPegawaiController@index')
                    ->name('referensi.bagian-pegawai');
                Route::post('/admin/referensi/bagian-pegawai', 'BagianPegawaiController@store');
                Route::get('/admin/referensi/bagian-pegawai/{id}', 'BagianPegawaiController@edit');
                Route::post('/admin/referensi/bagian-pegawai/update', 'BagianPegawaiController@update')
                    ->name('referensi.bagian-pegawai-update');
                Route::get('/admin/referensi/bagian-pegawai/hapus/{id}', 'BagianPegawaiController@destroy');

                // Semester
                Route::get('/admin/referensi/semester', 'SemesterController@index')
                    ->name('referensi.semester');
                Route::post('/admin/referensi/semester', 'SemesterController@store');
                Route::get('/admin/referensi/semester/{id}', 'SemesterController@edit');
                Route::post('/admin/referensi/semester/update', 'SemesterController@update')
                    ->name('referensi.semester-update');
                Route::get('/admin/referensi/semester/hapus/{id}', 'SemesterController@destroy');

                // Status Guru
                Route::get('/admin/referensi/status-guru', 'StatusGuruController@index')
                    ->name('referensi.status-guru');
                Route::post('/admin/referensi/status-guru', 'StatusGuruController@store');
                Route::get('/admin/referensi/status-guru/{id}', 'StatusGuruController@edit');
                Route::post('/admin/referensi/status-guru/update', 'StatusGuruController@update')
                    ->name('referensi.status-guru-update');
                Route::get('/admin/referensi/status-guru/hapus/{id}', 'StatusGuruController@destroy');

                // Jenjang pegawai
                Route::get('/admin/referensi/jenjang-pegawai', 'JenjangPegawaiController@index')
                    ->name('referensi.jenjang-pegawai');
                Route::post('/admin/referensi/jenjang-pegawai', 'JenjangPegawaiController@store');
                Route::get('/admin/referensi/jenjang-pegawai/{id}', 'JenjangPegawaiController@edit');
                Route::post('/admin/referensi/jenjang-pegawai/update', 'JenjangPegawaiController@update')
                    ->name('referensi.jenjang-pegawai-update');
                Route::get('/admin/referensi/jenjang-pegawai/hapus/{id}', 'JenjangPegawaiController@destroy');

                Route::get('/admin/referensi/pengaturan-hak-akses', 'PengaturanHakAksesController@index')
                    ->name('referensi.pengaturan-hak-akses');

                // Tingkatan Kelas
                Route::get('/admin/referensi/tingkatan-kelas', 'TingkatanKelasController@index')
                    ->name('referensi.tingkatan-kelas');
                Route::post('/admin/referensi/tingkatan-kelas', 'TingkatanKelasController@store');
                Route::get('/admin/referensi/tingkatan-kelas/{id}', 'TingkatanKelasController@edit');
                Route::post('/admin/referensi/tingkatan-kelas/update', 'TingkatanKelasController@update')
                    ->name('referensi.tingkatan-kelas-update');
                Route::get('/admin/referensi/tingkatan-kelas/hapus/{id}', 'TingkatanKelasController@destroy');
            });

        // Kalender
        Route::namespace('Kalender')
            ->group(function () {
                Route::get('/admin/kalender/kalender-akademik', 'KalenderAkademikController@index')
                    ->name('kalender.kalender-akademik');
            });

        // Pengumuman
        Route::namespace('Pengumuman')
            ->group(function () {
                Route::get('/admin/pengumuman/pesan', 'PesanController@index')
                    ->name('pengumuman.pesan');
            });
    });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController')->name('test');

