<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading"><h4 style="margin-bottom: 0px">Data Arsip</h4></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Arsip</span></li>
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
        <div class="panel-heading"><h3 class="panel-title">Semua Arsip</h3></div>
        <div class="panel-body">
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center">Waktu Upload</th>
                        <th class="text-center">Waktu Terbit Tanda Terima</th>
                        <th class="text-center">Kode Arsip</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Nama Perusahaan / Tenant</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../koneksi.php';
                        $no = 1;
                        $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,tenant WHERE arsip_tenant=tenant_id and arsip_kategori=kategori_id ORDER BY arsip_id DESC");
                        while($p = mysqli_fetch_array($arsip))
                        {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center">
                            <?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?><br>
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
                            <?php echo $p['arsip_kode']; ?>
                        </td>
                        <td class="text-center"><?php echo $p['kategori_nama'] ?></td>
                        <td class="text-center"><?php echo $p['tenant_nama'] ?></td>
                        <td>
                            <?php $status = $p['verifikasi_status']; ?>
                            <?php if ($status == 0) : ?>
                            <p class = "text-center "><strong class = "text-danger">Belum Terverifikasi</strong></p>
                            <?php if ($p['arsip_keterangan'] != "" && $p['arsip_keterangan'] != "-") : ?>
                            <b>Remark</b> : <br><?php echo nl2br($p['arsip_keterangan']) ;endif;?><br>
                            <?php elseif ($status == 1) : ?>
                            <p class = "text-center "><strong class = "text-success">Sudah Terverifikasi</strong></p>
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
                            <?php include "modal_arsip.php"?>
                            <?php if ($status == 0) : ?>
                            <button title="verifikasi dokumen" type="button" class="btn btn-success" data-toggle="modal" data-target="#verifikasi_<?php echo $p['arsip_id']; ?>">
                                <i class="fa fa-check"></i>&nbsp;Verifikasi Dokumen
                            </button>
                            <button title="tolak dokumen" type="button" class="btn btn-dark" data-toggle="modal" data-target="#tolakdokumen_<?php echo $p['arsip_id']; ?>">
                                <i class="fa fa-ban"></i>&nbsp;Tolak Dokumen
                            </button>
                            <?php elseif ($status == 1) : ?>
                            <?php if ($_SESSION['nama'] == "Nurdin" || $_SESSION['nama'] == "Alwan") {?>
                            <button title="terbitkan tanda terima" type="button" class="btn btn-success" data-toggle="modal" data-target="#tandaterima_<?php echo $p['arsip_id']; ?>">
                                <i class="fa fa-qrcode"></i>&nbsp;Terbitkan Tanda Terima
                            </button>
                            <?php } ?>
                            <button title="batal verifikasi dokumen" type="button" class="btn btn-warning" data-toggle="modal" data-target="#batalverifikasi_<?php echo $p['arsip_id']; ?>"><i class="fa fa-times"></i>&nbsp;Batal Verifikasi
                            </button>
                            <?php endif ?>
                            <a target="_blank" title="Unduh Dokumen" class="btn btn-primary" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i>&nbsp;Unduh Dokumen</a><br>
                            <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-warning"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>