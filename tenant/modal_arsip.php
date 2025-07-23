<div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
            </div>
            <div class="modal-footer">
                <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a> &nbsp;&nbsp;
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
            </div>
        </div>
    </div>
</div>