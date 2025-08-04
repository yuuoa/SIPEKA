<<<<<<< HEAD
<?php include 'header.php';?>
<div class="breadcome-area"><div class="breadcome-list"></div></div>
<div class="container-fluid">
    <div class="panel">
=======
<?php include 'header.php'; include 'breadcome.php';?>
<div class="container-fluid">
    <div class="panel panel">
>>>>>>> 9526d0f0c879fa3c5ffa89841b5233dee73b9afd
        <div class="panel-heading">
            <h3 class="panel-title">Data Arsip Saya</h3>
        </div>
        <div class="panel-body">
            <?php 
                $tenants = mysqli_query($koneksi,"select * from tenant where tenant_id='$id_tenant'");
                $tenants = mysqli_fetch_assoc($tenants);
                if ($tenants['tenant_sudah'] != 1) {
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
            <br><br><br>
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){ ?>
                    <div class="alert alert-danger">File arsip gagal diupload. karena demi keamanan file .php tidak diperbolehkan.</div>
                    <?php }else{ ?>
                    <div class="alert alert-success">Arsip berhasil tersimpan.</div>
                <?php } } ?>
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
                                <?php if ($p['arsip_waktu_verifikasi'] != NULL) : 
                                    echo date('H:i:s',strtotime($p['arsip_waktu_verifikasi']));
                                    echo("<br>");
                                    echo date('d-m-Y',strtotime($p['arsip_waktu_verifikasi']));
                                else : ?>
                                    -
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php echo $p['arsip_kode']; ?>
                            </td>
							<td class="text-center"><?php echo $p['kategori_nama'] ?></td>							
                            <td>
                                <?php $status = $p['verifikasi_status'];                               ?>
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
                                <?php include "modal_arsip.ph" ?>
                                <?php if ($status == 2) : ?>
                                <a target="_blank" href="../tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-qrcode"></i>&nbsp;Lihat Tanda Terima</a>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <?php elseif ($status == 1) : ?>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <?php elseif ($status != 1) : ?>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <a title="Edit Dokumen" href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i>&nbsp;Edit Dokumen</a>
                                <button title="Hapus Dokumen" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>"><i class="fa fa-trash"></i>&nbsp;Hapus Dokumen</button>
                                <?php endif ?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>