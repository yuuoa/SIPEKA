<?php include 'header.php'; include 'breadcome.php';?>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Arsip Saya</h3>
        </div>
        <div class="panel-body">
            <?php 
                $tenants = mysqli_query($koneksi,"select * from tenant where tenant_id='$id_tenant'");
                $tenants = mysqli_fetch_assoc($tenants);
                if ($tenants['tenant_sudah'] < 1) {
                    $today = date('d-m');
                    $month = date('m');
                    $semester = date('m');
                    $year = date('Y');
                    switch ($month) {
                        case '01': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        case '02': ?>
                            <div class="alert alert-danger">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        case '03': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '04': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '05': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '06': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '07': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '08': ?>
                            <div class="alert alert-danger">
                                <p class="text-center">Batas waktu upload dokumen semester I adalah <b>31 Agustus <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                            <?php
                            break;
                        case '09': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b> segera upload dokumen perusahaan anda!</p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        case '10': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        case '11': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        case '12': ?>
                            <div class="alert alert-warning">
                                <p class="text-center">Batas waktu upload dokumen semester II adalah <b>28 Februari <?php echo $year ?></b></p>
                            </div>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                        break;
                        default: ?>
                            <div class="pull-right">
                                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                            </div>
                        <?php
                    }
                }
                elseif ($tenants['tenant_sudah'] > 0) { ?>
                    <!--<div class="alert alert-success">-->
                    <!--    <p class="text-center">Terima kasih, dokumen anda sudah kami terima. Silahkan menunggu periode selanjutnya. Jika anda ingin menambahkan arsip, silahkan hubungi email <b><a href="mailto:ehs@mitrakarawang.com">ehs@mitrakarawang.com</a></b></p>-->
                    <!--</div>-->
                    <div class="pull-right">
                        <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                    </div>
                    <?php
                }
            ?>
            <br>
            <br>
            <br>

            <center>
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        ?>
                        <div class="alert alert-danger">File arsip gagal diupload. karena demi keamanan file .php tidak diperbolehkan.</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-success">Arsip berhasil tersimpan.</div>
                        <?php
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center">Waktu Upload</th>
                        <th class="text-center">Waktu Terbit Tanda Terima</th>	
                        <th class="text-center">Kode</th>	
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $saya = $_SESSION['id'];
                    $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,tenant WHERE arsip_tenant=tenant_id and arsip_kategori=kategori_id and arsip_tenant='$saya' ORDER BY arsip_id DESC");
                    while($p = mysqli_fetch_array($arsip)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class="text-center">
                                <?php 
                                    echo date('H:i:s',strtotime($p['arsip_waktu_upload']));
                                    echo("<br>");
                                    echo date('d-m-Y',strtotime($p['arsip_waktu_upload'])); 
                                ?>
                            </td>
                            <td class="text-center">
                            <?php if ($p['arsip_waktu_verifikasi'] != NULL) : ?>
                                <?php
                                    echo date('H:i:s',strtotime($p['arsip_waktu_verifikasi']));
                                    echo("<br>");
                                    echo date('d-m-Y',strtotime($p['arsip_waktu_verifikasi']));
                                ?>
                            <?php else : ?>
                                -
                            <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php
                                echo $p['arsip_kode'];
                                 ?>
                            </td>
							<td class="text-center"><?php echo $p['kategori_nama'] ?></td>							
                            <td>
                                <?php                                     
                                    $status = $p['verifikasi_status'];
                                ?>
                                <?php if ($status == 0 || $status == 1) : ?>
                                    <p class = "text-center "><strong class = "text-danger">Belum Terverifikasi</strong></p>
                                    <?php if ($p['arsip_keterangan'] != "" && $p['arsip_keterangan'] != "-") : ?>
                                    <b>Remark</b> : <br><?php echo nl2br($p['arsip_keterangan']) ;endif;?><br>
                                <?php elseif ($status == 2) : ?>
                                    <p class = "text-center "><strong class = "text-primary">Selesai Proses</strong></p>
                                    <?php if ($p['arsip_keterangan'] != "" && $p['arsip_keterangan'] != "-") : ?>
                                    <b>Remark</b> : <br><?php echo nl2br($p['arsip_keterangan']) ;endif;?><br>
                                <?php elseif ($status == 3) : ?>
                                    <p class = "text-center "><strong>tidak valid</strong></p>
                                    <b>Alasan</b> : <br><?php echo nl2br($p['arsip_keterangan']) ?><br>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
                                                <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a> &nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($status == 2) : ?>
                                <a target="_blank" href="../tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-qrcode"></i>&nbsp;Lihat Tanda Terima</a>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <?php elseif ($status == 1) : ?>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <?php elseif ($status != 1) : ?>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <!-- <a target="_blank" title="Unduh Dokumen" class="btn btn-warning" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a>  -->
                                <a title="Edit Dokumen" href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i>&nbsp;Edit Dokumen</a>
                                <button title="Hapus Dokumen" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>"><i class="fa fa-trash"></i>&nbsp;Hapus Dokumen</button>
                                <?php endif ?>
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