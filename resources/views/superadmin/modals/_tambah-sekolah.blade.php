<div class="modal fade modal-flex" id="modal-sekolah" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah Sekolah
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-sekolah" action="" method="POST" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="id_sekolah">ID Sekolah:</label>
                                <input type="text" name="id_sekolah" id="id_sekolah" class="form-control form-control-sm" placeholder="ID Sekolah">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="name">Nama Sekolah:</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Nama Sekolah">
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="alamat">Alamat Sekolah:</label>
                                <textarea class="form-control form-control-sm" name="alamat" id="alamat" rows="3" cols="10" placeholder="Alamat Sekolah"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="provinsi">Provinsi:</label>
                                <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                    <option value="">-- Provinsi --</option>
                                    @foreach($provinsis as $provinsi)
                                    <option value="{{ $provinsi->name }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten:</label>
                                <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                    <option value="">-- Kabupaten --</option>
                                    @foreach($kabupaten as $kab)
                                    <option value="{{ $kab->name }}">{{ $kab->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="jenjang">Jenjang:</label>
                                <select name="jenjang" id="jenjang" class="form-control form-control-sm">
                                    <option value="">-- Jenjang --</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SD">SD</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="tahun_ajaran">T.A:</label>
                                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control form-control-sm">
                                    <option value="">-- T.A --</option>
                                    <option value="2020-2021">2020/2021</option>
                                    <option value="2021-2022">2021/2022</option>
                                    <option value="2022-2023">2022/2023</option>
                                    <option value="2023-2024">2023/2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="file">Pilih File:</label>
                                <input type="file" name="logo" id="logo" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <input type="hidden" name="hidden_id" id="hidden_id">
                                <input type="hidden" id="action">
                                <button type="button" id="rest" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" id="btn" class="btn btn-sm btn-outline-success">Simpan</button>                          
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>