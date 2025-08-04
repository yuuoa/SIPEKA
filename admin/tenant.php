<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Perusahaan / Tenant</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Perusahaan / Tenant</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="panel panel">
        <div class="panel-body">
            <?php include "modal_tenant.php"?>
            <div class="pull-right">
                <button title="Reset Status" type="button" class="btn btn-danger" data-toggle="modal" data-target="#resetstatus">
                    <i class="fa fa-rotate-right"></i>&nbsp;Reset Status Upload
                </button><br>
                <a href="mailto:<?php include 'template_email_peringatan.php'; ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> Kirim Email Peringatan</a>
            </div>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th class="text-center">Nama Perusahaan / Tenant</th>
                        <th class="text-center">Kode Tenant</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Status Akun</th>
                        <th class="text-center">Status Arsip</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $tenant = mysqli_query($koneksi,"SELECT * FROM tenant ORDER BY tenant_id DESC");
                    while($p = mysqli_fetch_array($tenant)){
                        ?>
                        <tr class="text-center">
                            <td><?php echo $no++; ?></td>
                            <td>
                                <?php 
                                if($p['tenant_foto'] == ""){
                                    ?>
                                    <img class="img-user" src="../gambar/sistem/user.png">
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-user" src="../gambar/tenant/<?php echo $p['tenant_foto']; ?>">
                                    <?php
                                }
                                ?>
                            </td>
                            <td><?php echo $p['tenant_nama'] ?></td>
                            <td><?php echo $p['tenant_kode'] ?></td>
                            <td><?php echo $p['tenant_username'] ?></td>
                            <td>
                                <?php                                     
                                $status = $p['tenant_status'];
                                if ($status == 0) : ?>
                                <p class = "text-center "><strong class = "text-danger">Belum Aktif</strong></p>
                                <?php elseif ($status == 1) : ?>
                                <p class = "text-center "><strong class = "text-primary">Aktif</strong></p>
                                <?php endif ?>
                            </td>
                            <td>
                                <?php                                     
                                $tarsip = $p['tenant_sudah'];
                                if ($tarsip == 0) : ?>
                                <p class = "text-center "><strong class = "text-danger">Belum Upload</strong></p>
                                <?php elseif ($tarsip == 1) : ?>
                                <p class = "text-center "><strong class = "text-success">Sudah Upload</strong></p>
                                <?php endif ?>
                            </td>

                                <div class="modal fade" id="hapusTenant_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusTenantLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusTenantLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda ingin menghapus data tenant ini?
                                            </div>
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
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin? data tenant yang telah terhapus tidak dapat dikembalikan kembali.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                                <a href="tenant_hapus.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <td class="text-center">
                                <a href="tenant_preview.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-warning -5"><i class="fa fa-search"></i>&nbsp;Lihat Detil Tenant</a>
                                <?php if ($status == 1): ?>
                                <a href="tenant_edit.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-primary"><i class="fa fa-wrench"></i>&nbsp;Edit Tenant</a>
                                <?php elseif ($status == 0): ?>
                                <a href="#"></a>
                                <?php endif ?>
                                <button title="Hapus Tenant" type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusTenant_<?php echo $p['tenant_id']; ?>">
                                    <i class="fa fa-trash"></i>&nbsp;Hapus Tenant
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>