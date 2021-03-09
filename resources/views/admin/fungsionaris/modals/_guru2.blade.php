<div class="modal fade modal-flex" id="modal-guru" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Guru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_guru" action="/">
                    @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row" id="editGuru">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="pegawai_id">Nama Guru</label>
                                            <select name="pegawai_id" id="pegawai_id" class="form-control form-control-sm">
                                                <option value="">-- Nama Guru --</option>
                                                {{-- <option value="1">Yuda Budi Pratama</option>
                                                <option value="2">Sri Gunawan</option> --}}
                                                @foreach($pegawai as $obj)
                                                <option value="{{$obj->id}}">{{$obj->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="status_guru_id">Status Guru</label>
                                            <select name="status_guru_id" id="status_guru_id" class="form-control form-control-sm">
                                                <option value="">-- Status Guru --</option>
                                                @foreach($status as $obj)
                                                <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="status_guru_id">Wali Kelas</label>
                                            <select name="kelas_id" id="kelas_id" class="form-control form-control-sm">
                                                <option value="">-- Pilih kelas jika guru merupakan wali kelas --</option>
                                                @foreach($kelas as $obj)
                                                <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" cols="10" rows="3" class="form-control form-control-sm" placeholder="Keterangan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="status" id="status" checked>
                                            <label class="custom-control-label" for="aktif">Aktif</label>
                                            <span id="form_result" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img width="250 px" height="187 px" src="https://sekolah.schlrr.com/assets/img/image_placeholder.jpg" alt="..." id="guru_img_selector">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    {{-- <div class="modal-footer">
                        <button type="submit" id="btn-submit" class="btn btn-sm btn-outline-success">Simpan</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button id="form_guru_submit" type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
