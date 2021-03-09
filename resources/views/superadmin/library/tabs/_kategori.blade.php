<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <h5>Kategori Buku</h5>
                <button id="add-kategori-btn" class="btn-add btn btn-primary btn-sm shadow-sm mb-3">Tambah</button>

                {{-- Form tambah --}}
                <div id="add-kategori-container" class="add-container">
                    <form id="form-kategori" method="POST" action="{{ route('superadmin.library-kategori.index') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="name" class="mt-1">
                                        Kategori:
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                               <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Kategori">
                                    <span class="text-danger" id="kategori_result"></span>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="thumbnail" class="mt-1">
                                        Thumbnail:
                                        <br>
                                        <small class="text-muted" style="font-size: 70%;">max. 2MB (500px x 500px)</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <input type="file" class="form-control form-control-sm" name="thumbnail" id="thumbnail" accept="image/*" value="" autocomplete="off">
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <input type="submit" value="Simpan" class="btn btn-sm btn-success btn-block shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Form update --}}
                <button id="cancel-kategori-btn" class="btn-cancel btn btn-danger btn-sm shadow-sm mb-3">Batal</button>
                <div id="update-kategori-container" class="update-container">
                    <form id="form-kategori-update" method="POST" action="{{ route('superadmin.library-kategori.index') }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="name" class="mt-1">
                                        Kategori:
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                               <div class="form-group">
                                    <input type="text" name="name" id="kategori-update" class="form-control" placeholder="Kategori">
                                    @error('kategori')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="thumbnail" class="mt-1">
                                        Thumbnail:
                                        <br>
                                        <small class="text-muted" style="font-size: 70%;">diisi jika ada perubahan</small>
                                        <br>
                                        <small class="text-muted" style="font-size: 70%;">max. 2MB (500px x 500px)</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <input type="file" class="form-control form-control-sm" name="thumbnail" id="thumbnail-kategori-update" accept="image/*" value="" autocomplete="off">
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <input type="submit" value="Update" class="btn btn-sm btn-info btn-block shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-12">
                <hr>
                <table class="table table-sm table-bordered" id="table-kategori">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Thumbnail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($kategoris as $key => $kategori)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $kategori->name }}</td>
                                <td><a href="{{ Storage::url($kategori->thumbnail) }}" target="_blank">Lihat</a></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info shadow-sm" id="edit-kategori" data-id="{{ $kategori->id }}"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-sm btn-danger shadow-sm" id="delete-kategori"
                                        data-url="{{ route('superadmin.library-kategori.destroy', $kategori->id) }}" 
                                        data-toggle="modal" data-target="#confirmDeleteModal">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3">Tidak ada data</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>