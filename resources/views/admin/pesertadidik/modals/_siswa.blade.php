<div class="modal fade modal-flex" id="modal-siswa" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.pesertadidik.siswa.store') }}" method="POST" id="createForm" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#data-siswa" role="tab">Data Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data-ortu" role="tab">Data Orang Tua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data-wali" role="tab">Data Wali</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data-login" role="tab">Data Login Siswa</a>
                        </li>
                    </ul>
                    <div class="tab-content modal-body">
                        <div class="tab-pane active" id="data-siswa" role="tabpanel">
                            @include('admin.pesertadidik.modals._data-siswa')
                        </div>
                        <div class="tab-pane" id="data-ortu" role="tabpanel">
                            @include('admin.pesertadidik.modals._data-ortu')
                        </div>
                        <div class="tab-pane" id="data-wali" role="tabpanel">
                            @include('admin.pesertadidik.modals._data-wali')
                        </div>
                        <div class="tab-pane" id="data-login" role="tabpanel">
                            @include('admin.pesertadidik.modals._data-login-siswa')
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-submit" class="btn btn-sm btn-outline-success">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>