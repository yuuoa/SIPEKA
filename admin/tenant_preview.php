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
                <div class="panel-heading"><h3 class="panel-title">Preview Tenant</h3></div>
                <?php 
                    $id = $_GET['id'];  
                    $data = mysqli_query($koneksi,"SELECT * FROM tenant WHERE tenant_id='$id'");
                    while($p = mysqli_fetch_array($data)){
                ?>
                <div class="panel-body">
                    <? php include "modal_tenant_preview.php"?>
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
                    <br><br>
                    <div class="row">
                        <div class="col-lg-4">
                                <?php if($p['tenant_foto'] == ""){ ?>
                                <img class="img-user" src="../gambar/sistem/user.png">
                                <?php }else{ ?>
                                <img class="img-user" src="../gambar/tenant/<?php echo $p['tenant_foto']; ?>">
                                <?php } ?>
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
                                        <?php if ($p['tenant_status'] == 0) : ?> Belum Aktif
                                        <?php elseif ($p['tenant_status'] == 1) : ?> Aktif
                                        <?php endif ?>
                                        </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-8">
                            <div class="pdf-singe-pro"><a class="media" href="../arsip/dokumen_tenant/<?php echo $p['tenant_suratkuasa']; ?>"></a></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>