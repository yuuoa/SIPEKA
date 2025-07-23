<?php include 'header.php'; include 'breadcome.php';?>
<?php 
    $tenants = mysqli_query($koneksi,"select * from tenant where tenant_id='$id_tenant'");
    $tenants = mysqli_fetch_assoc($tenants);
    if ($tenants['tenant_sudah'] < 1) {
        $today = date('d-m');
        $month = date('m');
        $semester = date('m');
        $year = date('Y');
        if ($month == 1 || $month == 2 || $month == 9 || $month == 10 || $month == 11 || $month == 12) { ?>
            <div class="alert alert-danger"><p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?><?php if ($month == 2) { ?></b> segera upload dokumen perusahaan anda!</p><?php } ?></div>
            <div class="pull-right"><a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a></div>
        <?php }
        elseif ($month == 3 || $month == 4 || $month == 5 || $month == 6 || $month == 7 || $month == 8) { ?>
            <div class="alert alert-danger"><p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?><?php if ($month == 8) { ?></b> segera upload dokumen perusahaan anda!</p><?php } ?></b> segera upload dokumen perusahaan anda!</p></div>
            <div class="pull-right"><a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a></div>
        <?php } ?>
        <?php }
    elseif ($tenants['tenant_sudah'] > 0) { ?>
    <div class="pull-right"><a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a></div>
<?php } ?>
<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
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
								$saya = $_SESSION['id'];
                                $jumlah_arsip = mysqli_query($koneksi,"select * from arsip where arsip_tenant ='$saya'");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>