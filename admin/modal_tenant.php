<div class="pull-right">
    <button title="Reset Status" type="button" class="btn btn-danger" data-toggle="modal" data-target="#resetstatus">
        <i class="fa fa-rotate-right"></i>&nbsp;Reset Status Upload
    </button><br>
    <a href="mailto:<?php include 'template_email_peringatan.php'; ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> Kirim Email Peringatan</a>
</div>
<div class="modal fade" id="resetstatus" tabindex="-1" role="dialog" aria-labelledby="resetstatusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resetstatusLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin untuk mereset status upload tenant?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                <a href="tenant_reset.php" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="hapusTenant_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusTenantLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusTenantLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Apakah anda ingin menghapus data tenant ini?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                <button title="Hapus Tenant" type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusTenantVerification_<?php echo $p['tenant_id']; ?>">
                    <i class="fa fa-check"></i>&nbsp;Ya
                </button>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="hapusTenantVerification_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusTenantVerificationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusTenantVerificationLabel">PERINGATAN!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Apakah anda yakin? data tenant yang telah terhapus tidak dapat dikembalikan kembali.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                <a href="tenant_hapus.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya</a>
            </div>
        </div>
    </div>
</div>