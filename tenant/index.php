<?php include 'header.php'; include 'breadcome.php';?>

<?php 
    $tenants = mysqli_query($koneksi,"select * from tenant where tenant_id='$id_tenant'");
    $tenants = mysqli_fetch_assoc($tenants);
    if ($tenants['tenant_sudah'] < 1) {
        $today = date('d-m');
        $month = date('m');
        $year = date('Y');
        switch ($month) {
            case '01': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                </div>
            <?php
            break;
            case '02': ?>
                <div class="alert alert-danger">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                </div>
            <?php
            break;
            case '03': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                </div>
                <?php
                break;
            case '04': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                </div>
                <?php
                break;
            case '05': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                </div>
                <?php
                break;
            case '06': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                </div>
                <?php
                break;
            case '07': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                </div>
                <?php
                break;
            case '08': ?>
                <div class="alert alert-danger">
                    <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                </div>
                <?php
                break;
            case '09': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                </div>
            <?php
            break;
            case '10': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                </div>
            <?php
            break;
            case '11': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                </div>
            <?php
            break;
            case '12': ?>
                <div class="alert alert-warning">
                    <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                </div>
            <?php
            break;
            default: ?>
            <?php
        }
    }
    elseif ($tenants['tenant_sudah'] > 0) { ?>
    <div class="alert alert-success">
        <p class="text-center">Terima kasih, dokumen anda sudah kami terima. Silahkan menunggu periode selanjutnya. Jika anda ingin menambahkan arsip, silahkan hubungi email <b><a href="mailto:ehs@mitrakarawang.com">ehs@mitrakarawang.com</a></b></p>
    </div>
    <?php
    }
    ?>

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