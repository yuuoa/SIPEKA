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
<<<<<<< HEAD
                    <div class="modal fade text-center" id="aktivasi_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktivasiLabel" aria-hidden="true">
=======
                    <div class="modal fade" id="aktivasi_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktivasiLabel" aria-hidden="true">
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
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
<<<<<<< HEAD
                                    <?php 
                                        $id = $p['tenant_id'];
                                        $data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
                                        while($d = mysqli_fetch_array($data))
                                        {
                                    ?>
=======
                                <?php 
                                    $id = $p['tenant_id'];
                                    $data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
                                    while($d = mysqli_fetch_array($data))
                                    {
                                ?>
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                    <form method="post" action="tenant_aktivasi.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode perusahaan</label>
                                            <input type="hidden" name="id" value="<?php echo $d['tenant_id']; ?>">
                                            <input type="text" class="form-control" name="kode" required="required" value="<?php echo $d['tenant_kode']; ?>">
                                        </div>
<<<<<<< HEAD
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="foto" required="required"accept=".png,.jpg,.jpeg">
							                <p style="color:red;"><em>.PNG, .JPG, .JPEG Max. 2MB</em></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Aktivasi
                                            ">
                                            
                                            <a href="mailto:<?php echo $d['tenant_email']; ?>?cc=It_KiM@mitrakarawang.com, wtp.wwtp@mitrakarawang.com&subject=Masuk SIPEKA KIM&body=Akun anda sudah terverifikasi, silahkan masuk dengan email '<?php echo $d['tenant_email']; ?>' dan password '<?php echo $d['tenant_password']; ?>'. silahkan lakukan penggantian password setelah melakukan proses login.">Send Email</a>

=======
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <div class="form-group">
                                            <label></label>
                                            <input type="submit" class="btn btn-primary" value="Aktivasi">
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                        </div>
                                    </form>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <a href="tenant.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a><br><br>
                    
                    <?php if ($p['tenant_status'] == 0) : ?>
                        <button title="Aktivasi Akun" type="button" class="btn btn-success" data-toggle="modal" data-target="#aktivasi_<?php echo $p['tenant_id']; ?>">
                            <i class="fa fa-check"></i>&nbsp;Aktivasi Akun
                        </button>
                    <?php endif ?>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
<<<<<<< HEAD
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
=======
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
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
<<<<<<< HEAD
                                    <th>Jabatan</th>
                                    <td><?php echo $p['tenant_jabatan']; ?></td>
                                </tr>
                                <tr>
=======
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                    <th>E-Mail Tenant</th>
                                    <td><?php echo $p['tenant_email']; ?></td>
                                </tr>
                                <tr>
<<<<<<< HEAD
                                    <th>Nomor WhatsApp Tenant</th>
=======
                                    <th>Nomor Kontak Tenant</th>
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
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