<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Perusahaan / Tenant</h4>
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
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel">
                <div class="panel-heading"><h3 class="panel-title">Edit Perusahaan / Tenant</h3></div>
                <div class="panel-body">
                    <div class="pull-right"><a href="tenant.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a></div>
                    <br><br>
                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="tenant_update.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="hidden" name="id" value="<?php echo $d['tenant_id']; ?>">
                            <input type="text" class="form-control" name="nama" value="<?php echo $d['tenant_nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kode Perusahaan</label>
                            <input type="text" class="form-control" name="kode" value="<?php echo $d['tenant_kode']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap Petugas</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $d['tenant_username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="<?php echo $d['tenant_jabatan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon (WhatsApp)</label>
                            <input type="text" class="form-control" name="teleponwa" value="<?php echo $d['tenant_notelp']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon Kantor</label>
                            <input type="text" class="form-control" name="teleponkantor" value="<?php echo $d['tenant_nokantor']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email Kantor</label>
                            <input type="email" class="form-control" name="emailkantor" value="<?php echo $d['tenant_email']; ?>">
                        </div>
                        <?php if($d['tenant_foto'] == ""){ ?>
                        <img class="img-user" src="../gambar/sistem/user.png">
                        <?php }else{ ?>
                        <img class="img-user" src="../gambar/tenant/<?php echo $d['tenant_foto']; ?>">
                        <?php } ?>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto">
                            <small>Kosongkan jika tidak ingin mengubah foto.</small>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>