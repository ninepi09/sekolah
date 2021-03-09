<div class="modal fade modal-flex" id="modal-siswa" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah Pelanggaran
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-pelanggaran-siswa" action="" method="">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control form-control-sm" placeholder="Nama Siswa">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal_pelanggaran">Tanggal</label>
                                <input id="tanggal_pelanggaran" name="tanggal_pelanggaran" class="form-control form-control-sm" type="text" placeholder="Tanggal" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Pelanggaran</label>
                                <select name="pelanggaran" onchange="setPoin(this)"  id="pelanggaran" class="form-control form-control-sm">
                                    <option value="">Pilih</option>
                                    @foreach($kategori as $k)
                                    <option data-poin="{{$k-> poin}}">{{ $k->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="poin">Poin</label>
                                <input type="text" name="poin" id="poin" class="form-control form-control-sm" placeholder="Poin" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="sebab">Sebab</label>
                                <textarea name="sebab" id="sebab" cols="10" rows="3" class="form-control form-control-sm" placeholder="Sebab"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="sanksi">Sanksi</label>
                                <select name="sanksi" id="sanksi" class="form-control form-control-sm">
                                    <option value="">Pilih</option>
                                    @foreach($sanksi as $s)
                                    <option>{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="penanganan">Penanganan</label>
                                <textarea name="penanganan" id="penanganan" cols="10" rows="3" class="form-control form-control-sm" placeholder="Penanganan"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="10" rows="3" class="form-control form-control-sm" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <input type="hidden" id="action" val="add">
                        <input type="submit" class="btn btn-sm btn-outline-success" value="Simpan" id="btn">
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>