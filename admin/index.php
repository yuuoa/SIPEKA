<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs">
                    <h3 class="box-title">Tenant</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-success">
                                <?php 
                                $jumlah_tenant = mysqli_query($koneksi,"select * from tenant");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_tenant); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Total Arsip</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-info">
                                <?php 
                                $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Tenant Belum Upload</h3>
                    <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th class="text-center">Nama Perusahaan / Tenant</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $tenant = mysqli_query($koneksi,"SELECT * FROM tenant WHERE tenant_sudah=0 ORDER BY tenant_id DESC");
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
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>