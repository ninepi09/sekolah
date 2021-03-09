<div id="confirmDeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteForm" method="POST">
                @csrf
                @method("DELETE")
                <div class="modal-header">
                    <h4>Konfirmasi</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center" id="confirm">Apakah anda yakin ingin hapus?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="ok_button" id="ok_button" class="btn btn-sm btn-outline-danger">Hapus</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>