<div class="card">
    <div class="card-body">
        <!-- <form id="form-siswa" action="#!"> -->
            <h5>Data Keluarga</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="status_anak">Status Anak</label>
                        <input type="text" name="status_anak" id="status_anak" class="form-control form-control-sm" placeholder="Status Anak">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Anak Ke- dari..</label>
                        <div class="input-group">
                            <input type="text" id="anak_ke" name="anak_ke" class="form-control form-control-sm" placeholder="Anak ke-">
                            <span class="input-group-append">
                                <button class="btn btn-mini btn-primary">/</button>
                            </span>
                            <input type="text" id="jumlah_saudara" name="jumlah_saudara" class="form-control form-control-sm" placeholder="Jumlah Saudara">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h5>Data Ayah</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-sm" placeholder="Nama Ayah">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tempat_lahir_ayah">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_ayah" id="tempat_lahir_ayah" class="form-control form-control-sm" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                        <input id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" class="form-control form-control-sm" type="text" placeholder="Tanggal Lahir" readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="agama_ayah">Agama Ayah</label>
                        <select name="agama_ayah" id="agama_ayah" class="form-control form-control-sm">
                            <option value="">-- Agama Ayah --</option>
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
                        <label for="kewarganegaraan_ayah">Kewarganegaraan</label>
                        <select name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control form-control-sm">
                            <option value="">-- Kewarganegaraan --</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="pendidikan_ayah">Pendidikan Terakhir</label>
                        <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control form-control-sm">
                            <option value="">-- Pendidikan Terakhir --</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/MTs/Sederajat">SMP/MTs/Sederajat</option>
                            <option value="SMA/MA/Sederajat">SMA/MA/Sederajat</option>
                            <option value="D1/D2/D3">D1/D2/D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan</label>
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control form-control-sm" placeholder="Pekerjaan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email_ayah">Alamat Email</label>
                        <input type="email" name="email_ayah" id="email_ayah" class="form-control form-control-sm" placeholder="Alamat Email">
                    </div>
                </div>
            </div>
            <hr>
            <h5>Data Ibu</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-sm" placeholder="Nama Ibu">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tempat_lahir_ibu">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control form-control-sm" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                        <input id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" class="form-control form-control-sm" type="text" placeholder="Tanggal Lahir" readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="agama_ibu">Agama Ibu</label>
                        <select name="agama_ibu" id="agama_ibu" class="form-control form-control-sm"> 
                            <option value="">-- Agama Ibu --</option>
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
                        <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
                        <select name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control form-control-sm">
                            <option value="">-- Kewarganegaraan --</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="pendidikan_ibu">Pendidikan Terakhir</label>
                        <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control form-control-sm">
                            <option value="">-- Pendidikan Terakhir --</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/MTs/Sederajat">SMP/MTs/Sederajat</option>
                            <option value="SMA/MA/Sederajat">SMA/MA/Sederajat</option>
                            <option value="D1/D2/D3">D1/D2/D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan</label>
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control form-control-sm" placeholder="Pekerjaan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email_ibu">Alamat Email</label>
                        <input type="email" name="email_ibu" id="email_ibu" class="form-control form-control-sm" placeholder="Alamat Email">
                    </div>
                </div>
            </div>
            <hr>
            <h5>Alamat Orang Tua</h5>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="alamat_ortu">Alamat</label>
                        <textarea name="alamat_ortu" id="alamat_ortu" cols="10" rows="3" class="form-control form-control-sm" placeholder="Alamat"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="no_telepon_ayah">No. Telp Ayah</label>
                        <input type="text" name="no_telepon_ayah" id="no_telepon_ayah" class="form-control form-control-sm" placeholder="No. Telp Ayah">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="no_telepon_ibu">No. Telp Ibu</label>
                        <input type="text" name="no_telepon_ibu" id="no_telepon_ibu" class="form-control form-control-sm" placeholder="No. Telp Ibu">
                    </div>
                </div>
            </div>
        <!-- </form> -->
    </div>
</div>