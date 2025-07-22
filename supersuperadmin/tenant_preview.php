<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Preview Tenant</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Preview Tenant</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Preview Tenant</h3>
                </div>
                <?php 
                    $id = $_GET['id'];  
                    $data = mysqli_query($koneksi,"SELECT * FROM tenant WHERE tenant_id='$id'");
                    while($p = mysqli_fetch_array($data)){
                ?>
                <div class="panel-body">
                    <div class="modal fade text-center" id="aktivasi_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktivasiLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="aktivasiLabel">PERINGATAN!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin mengaktivasi akun ini? <br>Silahkan masukkan kode perusahaan.
                                </div>
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
                                <?php 
                                }
                                ?>
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

                    <a href="tenant.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a><br><br>
                    
                    <?php if ($p['tenant_status'] == 0) : ?>
                        <button title="Aktivasi Akun" type="button" class="btn btn-success" data-toggle="modal" data-target="#aktivasi_<?php echo $p['tenant_id']; ?>">
                            <i class="fa fa-check"></i>&nbsp;Aktivasi Akun
                        </button>
                    <?php elseif ($p['tenant_status'] == 1) : ?>
                        <button title="Nonaktifkan Akun" type="button" class="btn btn-warning" data-toggle="modal" data-target="#nonaktifkan_<?php echo $p['tenant_id']; ?>">
                            <i class="fa fa-times"></i>&nbsp;Nonaktifkan Akun
                        </button>
                    <?php endif ?>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
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
                            <table class="table">
                                <tr>
                                    <th>Nama Tenant</th>
                                    <td><?php echo $p['tenant_nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kode Tenant</th>
                                    <td><?php echo $p['tenant_kode']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama PIC</th>
                                    <td><?php echo $p['tenant_username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td><?php echo $p['tenant_jabatan']; ?></td>
                                </tr>
                                <tr>
                                    <th>E-Mail Tenant</th>
                                    <td><?php echo $p['tenant_email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor WhatsApp Tenant</th>
                                    <td><?php echo $p['tenant_notelp']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status Akun</th>
                                    <td>
                                        <?php if ($p['tenant_status'] == 0) : ?>
                                            Belum Aktif
                                        <?php elseif ($p['tenant_status'] == 1) : ?>
                                            Aktif
                                        <?php endif ?>
                                        </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-8">
                            <div class="pdf-singe-pro">
                                <a class="media" href="../arsip/dokumen_tenant/<?php echo $p['tenant_suratkuasa']; ?>"></a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>