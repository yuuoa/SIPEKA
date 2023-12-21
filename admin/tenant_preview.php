<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Preview Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Preview Arsip</span></li>
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
                            <div class="modal fade" id="aktivasi_<?php echo $p['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktivasiLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="aktivasiLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin memverifikasi data ini? <br>pastikan data sudah dicek dengan benar.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                            <a href="tenant_aktivasi.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
                                        </div>
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
                                <!-- <img src="../arsip/<?php echo $p['arsip_file']; ?>"> -->
                            <div class="pdf-singe-pro">
                                <!-- <a class="media" href="../arsip/<?php echo $p['arsip_file']; ?>"></a> -->
                            </div>
                            <!-- <p>Preview tidak tersedia, silahkan <a target="_blank" style="color: blue" href="../arsip/<?php echo $p['arsip_file']; ?>">Download di sini.</a></p>. -->
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