<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <h5>Tipe Buku</h5>

                {{-- Form tambah --}}
                <button id="add-tipe-btn" class="btn-add btn btn-primary btn-sm shadow-sm mb-3" data-jenis="tipe">Tambah</button>
                <div id="add-tipe-container" class="add-container">
                    <form id="form-tipe" class="add-form" method="POST" action="{{ route('superadmin.library-tipe') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="tipe" id="tipe" class="form-control" placeholder="Tipe">
                                    <span class="text-danger" id="tipe_result"></span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <input type="submit" value="Simpan" class="btn btn-sm btn-success btn-block shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Form update --}}
                <button id="cancel-tipe-btn" class="btn-cancel btn btn-danger btn-sm shadow-sm mb-3">Batal</button>
                <div id="update-tipe-container" class="update-container">
                    <form id="form-tipe-update" class="update-form" method="POST" action="{{ route('superadmin.library-tipe-update') }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="tipe" id="tipe-update" class="form-control" placeholder="Tipe">
                                    @error('tipe')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <input type="submit" value="Update" class="btn btn-sm btn-info btn-block shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Table --}}
            <div class="col-xl-12">
                <hr>
                <table class="table table-sm table-bordered" id="table-tipe">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tipe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($tipes as $key => $tipe)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $tipe->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info shadow-sm" id="edit-tipe" data-id="{{ $tipe->id }}"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-sm btn-danger shadow-sm" id="delete-tipe"
                                        data-url="{{ route('superadmin.library-tipe-delete', $tipe->id) }}" 
                                        data-toggle="modal" data-target="#confirmDeleteModal">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4">Tidak ada data</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>