<div class="modal fade modal-flex" id="modal-guru" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Form Pelanggaran
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_guru" action="/">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama_guru">Nama Lengkap</label>
                                <input type="text" name="nama_guru" id="nama_guru" class="form-control form-control-sm" placeholder="Nama Lengkap">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input id="nip" name="nip" class="form-control form-control-sm" type="text" placeholder="NIP" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" name="nik" class="form-control form-control-sm" type="text" placeholder="NIK" />
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
                                <input id="gelar_belakang" name="gelar_belakang" class="form-control form-control-sm" type="text" placeholder="Gelar Belakang" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm" placeholder="Tanggal Lahir" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="form-control form-control-sm">
                                    <option value="">-- Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Status Menikah</label>
                                <select name="status" id="status" class="form-control form-control-sm">
                                    <option value="">-- Status Menikah --</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat_tinggal">Alamat Tinggal</label>
                                <textarea name="alamat_tinggal" id="alamat_tinggal" cols="10" rows="3" class="form-control form-control-sm" placeholder="Alamat Tinggal"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                    <option value="">-- Provinsi --</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten</label>
                                <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                    <option value="">-- Kabupaten --</option>
                                    <option value="Langkat">Langkat</option>
                                    <option value="Deli Serdang">Deli Serdang</option>
                                    <option value="Medan">Medan</option>
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
                                    <option value="Besitang">Besitang</option>
                                    <option value="Medan Kota">Medan Kota</option>
                                    <option value="Medan Selayang">Medan Selayang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dusun">Dusun</label>
                                <input type="text" name="dusun" id="dusun" class="form-control form-control-sm" placeholder="Dusun">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="rt">RT</label>
                                <input type="text" name="rt" id="rt" class="form-control form-control-sm" placeholder="RT">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="rw">RW</label>
                                <input type="text" name="rw" id="rw" class="form-control form-control-sm" placeholder="RW">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" name="kode_pos" id="kode_pos" class="form-control form-control-sm" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telepon_rumah">No. Telp Rumah</label>
                                <input type="text" name="no_telepon_rumah" id="no_telepon_rumah" class="form-control form-control-sm" placeholder="No. Telp Rumah">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telepon">No. Telp</label>
                                <input type="text" name="no_telepon" id="no_telepon" class="form-control form-control-sm" placeholder="No. Telp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="E-Mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Username">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto guru</label>
                                <input type="file" name="foto" id="foto" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Informasi Pekerjaan</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai:</label>
                                <input id="tanggal_mulai" name="tanggal_mulai" class="form-control form-control-sm" type="text" placeholder="Tanggal Mulai Tugas" readonly />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bagian_guru">Bagian guru</label>
                                <select name="bagian_guru" id="bagian_guru" class="form-control form-control-sm">
                                    <option value="">-- Bagian guru --</option>
                                    <option value="Guru/Tenaga Pendidik">Guru/Tenaga Pendidik</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Laboran">Laboran</option>
                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
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
                                    <option value="2017/2018">2017/2018</option>
                                    <option value="2018/2019">2018/2019</option>
                                    <option value="2019/2020">2019/2020</option>
                                    <option value="2020/2021">2020/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select name="semester" id="semester" class="form-control form-control-sm">
                                    <option value="">-- Semester --</option>
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="jenjang">Jenjang</label>
                                <select name="jenjang" id="jenjang" class="form-control form-control-sm">
                                    <option value="">-- Jenjang --</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="form_guru_submit" type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
