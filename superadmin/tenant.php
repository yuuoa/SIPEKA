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

        <div class="panel-heading">
            <h3 class="panel-title">Data Perusahaan / Tenant</h3>
        </div>
        <div class="panel-body">


            <div class="pull-right">
                <a href="tenant_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Perusahaan / Tenant</a>
            </div>

            <br>
            <br>
            <br>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th class="text-center">Nama Perusahaan / Tenant</th>
                        <th class="text-center">Kode Tenant</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Status Akun</th>
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
                            ?>
                                <?php if ($status == 0) : ?>
                                    <p class = "text-center "><strong class = "text-danger">Belum Aktif</strong></p>
                                <?php elseif ($status == 1) : ?>
                                    <p class = "text-center "><strong class = "text-primary">Aktif</strong></p>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="tenant_preview.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Detil Tenant</a>
                                    <a href="tenant_edit.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i>&nbsp;Edit Tenant</a>
                                    <a href="tenant_hapus.php?id=<?php echo $p['tenant_id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i>&nbsp;Hapus Tenant</a>
                                </div>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>