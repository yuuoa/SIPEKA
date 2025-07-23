<div class="modal fade" id="verifikasi_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="verifikasidokumenLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="verifikasidokumenLabel">PERINGATAN!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin memverifikasi data ini? <br>
        </div>
        <?php 
        $id = $p['arsip_id'];
        $data = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="arsip_verifikasi.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Remark Dokumen</label>
                    <p>*opsional (isi "-" jika tidak ada)</p>
                    <input type="hidden" name="id" value="<?php echo $d['arsip_id']; ?>">
                    <textarea id="remark "type="txtArea" class="form-control m-3" name="remark" required="required" value="<?php echo $d['arsip_keterangan']; ?>" rows="4" cols="50"></textarea>
                </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <div class="form-group">
                <label></label>
                <input type="submit" class="btn btn-primary" value="Ya">
            </div>
            </form>
        </div>
        <?php 
        }
        ?>
    </div>
</div>
</div>

<div class="modal fade" id="tandaterima_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="tandaterimaLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tandaterimaLabel">PERINGATAN!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin menerbitkan tanda terima untuk dokumen ini? <br>pastikan data sudah dicek dengan benar.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
            <a href="arsip_tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="batalverifikasi_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="batalverifikasiLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="batalverifikasiLabel">PERINGATAN!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin membatalkan status verifikasi data ini? <br>pastikan data sudah dicek dengan benar.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
            <a href="arsip_batalverifikasi.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="tolakdokumen_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="tolakdokumenLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tolakdokumenLabel">PERINGATAN!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin menolak data ini? <br>Sebutkan alasan dokumen ini tidak valid.
        </div>
        <?php 
        $id = $p['arsip_id'];
        $data = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="arsip_tolak.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Alasan ditolak</label>
                    <input type="hidden" name="id" value="<?php echo $d['arsip_id']; ?>">
                    <textarea type="text" class="form-control" name="keterangan" required="required"  id="w3review" name="w3review" rows="4" cols="50" value="<?php echo $d['arsip_keterangan']; ?>"></textarea>
                </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <div class="form-group">
                <label></label>
                <input type="submit" class="btn btn-primary" value="Ya">
            </div>
            </form>
        </div>
        <?php 
        }
        ?>
    </div>
</div>
</div>