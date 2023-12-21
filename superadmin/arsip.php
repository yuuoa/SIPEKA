<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Arsip</h4>
                            </div>
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
        <div class="panel-heading">
            <h3 class="panel-title">Semua Arsip</h3>
        </div>
        <div class="panel-body">
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center">Waktu Upload</th>
                        <th class="text-center">Arsip</th>
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
                        <td><?php echo $no++; ?></td>
                        <td><?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?></td>
                        <td>
                            <b>Kode</b> : <?php echo $p['arsip_kode'] ?><br>
                            <b>Kegiatan</b> : <?php echo $p['arsip_nama'] ?><br>
                        </td>
                        <td><?php echo $p['kategori_nama'] ?></td>
                        <td><?php echo $p['tenant_nama'] ?></td>
                        <td>
                            <?php                                     
                                $status = $p['verifikasi_status'];
                            ?>
                            <?php if ($status == 0) : ?>
                                <p class = "text-center "><strong class = "text-danger">Belum Terverifikasi</strong></p>
                            <?php elseif ($status == 1) : ?>
                                <p class = "text-center "><strong class = "text-success">Sudah Terverifikasi</strong></p>
                            <?php elseif ($status == 2) : ?>
                                <p class = "text-center "><strong class = "text-primary">Selesai Proses</strong></p>
                            <?php elseif ($status == 3) : ?>
                                <p class = "text-center "><strong>tidak valid</strong></p>
                                <b>Alasan</b> : <?php echo $p['arsip_keterangan'] ?><br>
                            <?php endif ?>
                        </td>

                        <td class="text-center">
                            <!-- <div class="modal fade" id="hapus_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                            <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="modal fade" id="verifikasi_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="verifikasiLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="verifikasiLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin memverifikasi data ini? <br>pastikan data sudah dicek dengan benar.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                            <a href="arsip_verifikasi.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="tandaterima_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="tandaterimaLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tandaterimaLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menerbitkan tanda terima untuk dokumen ini? <br>pastikan data sudah dicek dengan benar.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                            <a href="arsip_tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="batalverifikasi_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="batalverifikasiLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="batalverifikasiLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin membatalkan status verifikasi data ini? <br>pastikan data sudah dicek dengan benar.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Tidak</button>
                                            <a href="arsip_batalverifikasi.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="tolakdokumen_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="tolakdokumenLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tolakdokumenLabel">PERINGATAN!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menolak data ini? <br>Sebutkan alasan dokumen ini tidak valid.
                                        </div>
                                        <?php 
                                        $id = $p['arsip_id'];
                                        $data = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                            <form method="post" action="arsip_tolak.php" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Alasan ditolak</label>
                                                    <input type="hidden" name="id" value="<?php echo $d['arsip_id']; ?>">
                                                    <input type="text" class="form-control" name="keterangan" required="required" value="<?php echo $d['arsip_keterangan']; ?>">
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" class="btn btn-primary" value="Ya">
                                            </div>
                                            </form>
                                        </div>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group">
                            <?php if ($status == 0) : ?>
                                <button title="verifikasi dokumen" type="button" class="btn btn-success" data-toggle="modal" data-target="#verifikasi_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button title="tolak dokumen" type="button" class="btn btn-dark" data-toggle="modal" data-target="#tolakdokumen_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-ban"></i>
                                </button>
                            <?php elseif ($status == 1) : ?>
                                <button title="terbitkan tanda terima" type="button" class="btn btn-success" data-toggle="modal" data-target="#tandaterima_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-qrcode"></i>
                                </button>
                                <button title="batal verifikasi dokumen" type="button" class="btn btn-warning" data-toggle="modal" data-target="#batalverifikasi_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-times"></i>
                                </button>
                            <?php endif ?>
                                <a target="_blank" title="Unduh Dokumen" class="btn btn-primary" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a> 
                                
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-warning"><i class="fa fa-search"></i></a>
                                
                                <!-- <button title="hapus dokumen" type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-trash"></i>
                                </button> -->
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