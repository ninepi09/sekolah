<div class="modal fade modal-flex" id="modal-library" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah Buku
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-library" method="POST" action="{{ route('superadmin.library.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="name">Judul:</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Judul" required>
                            </div>
                        </div>
                        <!--<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <label for="sekolah_id">Nama Sekolah:</label>-->
                        <!--        <select name="sekolah_id" id="sekolah_id" class="form-control form-control-sm">-->
                        <!--            <option value="">-- Nama Sekolah --</option>-->
                        <!--            @foreach ($sekolahs as $sekolah)-->
                        <!--                <option value="{{ $sekolah->id }}">{{ $sekolah->name }}</option>-->
                        <!--            @endforeach-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <label for="tingkat">Tingakt:</label>-->
                        <!--        <select name="tingkat" id="tingkat" class="form-control form-control-sm">-->
                        <!--            <option value="">-- Tingkat --</option>-->
                        <!--            <option value="SD">SD</option>-->
                        <!--            <option value="SMP">SMP</option>-->
                        <!--            <option value="SMA">SMA</option>-->
                        <!--            <option value="SMK">SMK</option>-->
                        <!--            <option value="Umum">Umum</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="kategori_id">Kategori:</label>
                                <select name="kategori_id" id="kategori_id" class="form-control form-control-sm">
                                    <option value="">-- Kategori --</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit:</label>
                                <select name="tahun_terbit" id="tahun_terbit" class="form-control form-control-sm">
                                    <option value="">-- Tahun Terbit --</option>
                                    @for ($year = 1975; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}" {{ date('Y') ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" cols="10" rows="3" class="form-control form-control-sm" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="thumbnail" class="mt-1">
                                            Thumbnail:
                                            <small class="text-muted">max. 3MB</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <input type="file" class="form-control form-control-sm" name="thumbnail" id="thumbnail" accept="image/*" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_video" class="mt-1">URL Video:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-video-camera"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_video" id="link_video">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_audio" class="mt-1">URL Audio:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_audio" id="link_audio">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="link_ebook" class="mt-1">URL E-Book:</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ti-book"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-sm" placeholder="https://" name="link_ebook" id="link_ebook">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="penulis_id">Penulis:</label>
                                <select name="penulis_id" id="penulis_id" class="form-control form-control-sm">
                                    <option value="">-- Penulis --</option>
                                    @foreach($penulises as $penulis)
                                        <option value="{{ $penulis->id }}">{{ $penulis->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="penerbit_id">Penerbit:</label>
                                <select name="penerbit_id" id="penerbit_id" class="form-control form-control-sm">
                                    <option value="">-- Penerbit --</option>
                                    @foreach($penerbits as $penerbit)
                                        <option value="{{ $penerbit->id }}">{{ $penerbit->penerbit }}</option>
                                    @endforeach
                                </select>
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