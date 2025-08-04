<div class="modal fade text-center" id="aktivasi_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktivasiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aktivasiLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin mengaktivasi akun ini? <br>Silahkan masukkan kode perusahaan.</div>
                <?php 
                    $id = $p['tenant_id'];
                    $data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
                    while($d = mysqli_fetch_array($data))
                    {
                ?>
                <form method="post" action="tenant_aktivasi.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode perusahaan</label>
                        <input type="hidden" name="id" value="<?php echo $d['tenant_id']; ?>">
                        <input type="text" class="form-control" name="kode" required="required" value="<?php echo $d['tenant_kode']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" accept=".png,.jpg,.jpeg">
                        <p style="color:red;"><em>.PNG, .JPG, .JPEG Max. 2MB</em></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Aktivasi
                        ">
                        <a href="mailto:<?php include 'template_email.php'; ?>">Send Email</a>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="modal fade text-center" id="nonaktifkan_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="nonaktifkanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nonaktifkanLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menonaktifkan data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                <a href="tenant_nonaktifkan.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
            </div>
        </div>
    </div>
</div>