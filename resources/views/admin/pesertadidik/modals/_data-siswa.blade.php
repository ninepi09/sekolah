<div class="card">
    <div class="card-body">
        <!-- <form id="form-siswa"> -->
            <h5>Data Akademik</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" id="nis" class="form-control form-control-sm" placeholder="NIS">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control form-control-sm" placeholder="NISN">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk:</label>
                        <input id="dropper-default" name="tanggal_masuk" class="form-control form-control-sm" type="text" placeholder="Select your date" readonly />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control form-control-sm" required>
                            <option value="">-- Kelas --</option>
                            @foreach($kelases as $kelas)
                                <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <h5>Data Diri</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-sm" placeholder="Nama Lengkap">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control form-control-sm" placeholder="Nama Panggilan">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="no_ktp">No. KTP <small><em class="text-muted">(jika ada)</em></small></label>
                        <input type="text" name="no_ktp" id="no_ktp" class="form-control form-control-sm" placeholder="Nomor KTP">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control form-control-sm">
                            <option value="">-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
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
                        <label for="suku">Suku</label>
                        <select name="suku" id="suku" class="form-control form-control-sm">
                            <option value="">-- Suku --</option>
                            <option value="Melayu">Melayu</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Batak">Batak</option>
                            <option value="Karo">Karo</option>
                            <option value="Mandailing">Mandailing</option>
                            <option value="Simalungun">Simalungun</option>
                            <option value="Pak-Pak">Pak-Pak</option>
                            <option value="Nias">Nias</option>
                            <option value="Angkola">Angkola</option>
                            <option value="Jawa">Jawa</option>
                        </select>
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
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input id="tanggal_lahir" name="tanggal_lahir" class="form-control form-control-sm" type="text" placeholder="Tanggal Lahir" readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="berat_badan">Berat Badan</label>
                        <div class="input-group">
                            <input type="text" id="berat_badan" name="berat_badan" class="form-control form-control-sm" placeholder="Berat Badan">
                            <span class="input-group-append">
                                <button class="btn btn-mini btn-primary" disabled>Kg</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <div class="input-group">
                            <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control form-control-sm" placeholder="Tinggi Badan">
                            <span class="input-group-append">
                                <button class="btn btn-mini btn-primary" disabled>cm</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="golongan_darah">Golongan Darah</label>
                        <select name="golongan_darah" id="golongan_darah" class="form-control form-control-sm">
                            <option value="">-- Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="hobi">Hobi</label>
                        <input type="text" name="hobi" id="hobi" class="form-control form-control-sm" placeholder="Hobi">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="riwayat_penyakit">Riwayat Penyakit</label>
                        <textarea name="riwayat_penyakit" id="riwayat_penyakit" cols="10" rows="3" class="form-control form-control-sm" placeholder="Riwayat Penyakit"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="moda_transportasi">Moda Transportasi</label>
                        <input type="text" name="moda_transportasi" id="moda_transportasi" class="form-control form-control-sm" placeholder="Moda Transportasi">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="jarak_rumah_sekolah">Jarak Tempat Tinggal ke Sekolah</label>
                        <div class="input-group">
                            <input type="text" id="jarak_rumah_sekolah" name="jarak_rumah_sekolah" class="form-control form-control-sm" placeholder="Jarak Tempat Tinggal ke Sekolah">
                            <span class="input-group-append">
                                <button class="btn btn-mini btn-primary" disabled>KM</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="is_siswa_pindahan">Siswa Pindahan?</label>
                        <select name="is_siswa_pindahan" id="is_siswa_pindahan" class="form-control form-control-sm">
                            <option value="">-- Siswa Pindahan? --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
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
                        <label for="foto">Foto Siswa</label>
                        <input type="file" name="foto" id="foto" class="form-control form-control-sm" accept="image/*">
                        <small>max. 2MB (tidak wajib jika tidak ingin diupdate)</small>
                    </div>
                </div>
            </div>
        <!-- </form> -->
    </div>
</div>