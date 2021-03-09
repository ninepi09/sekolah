<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <h5>Penerbit Buku</h5>
                <button id="add-penerbit-btn" class="btn-add btn btn-primary btn-sm shadow-sm mb-3">Tambah</button>

                {{-- Form tambah --}}
                <div id="add-penerbit-container" class="add-container">
                    <form id="form-penerbit" method="POST" action="{{ route('superadmin.library-penerbit.index') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit" required>
                                    <span class="text-danger" id="penerbit_result"></span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                <input type="submit" value="Simpan" class="btn btn-sm btn-success btn-block shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Form update --}}
                <button id="cancel-penerbit-btn" class="btn-cancel btn btn-danger btn-sm shadow-sm mb-3">Batal</button>
                <div id="update-penerbit-container" class="update-container">
                    <form id="form-penerbit-update" method="POST" action="{{ route('superadmin.library-penerbit.index') }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="penerbit" id="penerbit-update" class="form-control" placeholder="Penerbit" required>
                                    @error('penerbit')
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
            <div class="col-xl-12">
                <hr>
                <table class="table table-sm table-bordered" id="table-penerbit">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Penerbit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($penerbits as $key => $penerbit)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $penerbit->penerbit }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info shadow-sm" id="edit-penerbit" data-id="{{ $penerbit->id }}"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-sm btn-danger shadow-sm" id="delete-penerbit"
                                        data-url="{{ route('superadmin.library-penerbit.destroy', $penerbit->id) }}" 
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