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
            <h3 class="panel-title">Data Arsip Saya</h3>
        </div>
        <div class="panel-body">

<<<<<<< HEAD
            <?php
                $today = date('d-m');
                $semester = date('m');
                $year = date('Y');
                if ($semester >= '01' && $semester <= '06')
                {
                    if ($today >= '01-01' && $today <= '31-05')
                    {
                        ?>
                        <div class="alert alert-success">
                            <p class="text-center">Batas waktu pengunggahan arsip untuk periode semester 1 adalah <b>31 Mei <?php echo($year)?></b></p>
                        </div>
                        <div class="pull-right">
                            <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="alert alert-warning">
                            <p class="text-center">Batas waktu pengunggahan arsip semester 1 sudah terlewat. jika anda ingin menambahkan arsip, silahkan hubungi email <b>ehs@mitrakarawang.com</b></p>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-primary" disabled><i class="fa fa-cloud"></i> Unggah Arsip</button>
                        </div>
                        <?php
                    }
                }
                else
                {
                    if ($today >= '01-07' && $today <= '30-11')
                    {
                        ?>
                        <div class="alert alert-success">
                            <p class="text-center">Batas waktu pengunggahan arsip untuk periode semester 1 adalah <b>30 November <?php echo($year)?></b></p>
                        </div>
                        <div class="pull-right">
                            <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="alert alert-warning">
                            <p class="text-center">Batas waktu pengunggahan arsip semester 2 sudah terlewat. jika anda ingin menambahkan arsip, silahkan hubungi email <b>ehs@mitrakarawang.com</b></p>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-primary" disabled><i class="fa fa-cloud"></i> Unggah Arsip</button>
                        </div>
                        <?php
                    }
                }
            ?>
=======

            <div class="pull-right">
                <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Unggah Arsip</a>
            </div>
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d

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
<<<<<<< HEAD
                        <th class="text-center">Waktu Upload</th>
                        <th class="text-center">Waktu Terbit Tanda Terima</th>	
=======
                        <th class="text-center">Tanggal</th>		
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
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
<<<<<<< HEAD
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
=======
                            <td class="text-center"><?php echo date('d-m-Y  H:i',strtotime($p['arsip_waktu_upload'])) ?></td>
                           
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                            <td class="text-center">
                                <?php
                                echo date('d.m.',strtotime($p['arsip_waktu_upload'])), $p['arsip_id'], "/KIM-", $p['tenant_kode'], "/", date('Y',strtotime($p['arsip_waktu_upload']));
                                 ?>
                            </td>
<<<<<<< HEAD
=======

>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
							<td class="text-center"><?php echo $p['kategori_nama'] ?></td>							
                            <td>
                                <?php                                     
                                    $status = $p['verifikasi_status'];
                                ?>
                                <?php if ($status == 0) : ?>
<<<<<<< HEAD
                                    <p class = "text-center "><strong class = "text-danger">belum terverifikasi</strong></p>   
                                <?php elseif ($status == 1) : ?>
                                    <p class = "text-center "><strong class = "text-primary">sudah terverifikasi</strong></p>
                                <?php elseif ($status == 2) : ?>
                                    <p class = "text-center "><strong class = "text-success">Selesai Proses</strong></p>
                                <?php elseif ($status == 3) : ?>
=======
                                    <p class = "text-center "><strong class = "text-danger">belum terverifikasi</strong></p>
                                        
                                <?php elseif ($status == 1) : ?>
                                    <p class = "text-center "><strong class = "text-success">sudah terverifikasi</strong></p>

                                <?php elseif ($status == 2) : ?>
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                    <p class = "text-center "><strong>tidak valid</strong></p>
                                    <b>Alasan</b> : <?php echo $p['arsip_keterangan'] ?><br>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
<<<<<<< HEAD
=======

>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                <div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
<<<<<<< HEAD
=======

>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
<<<<<<< HEAD
=======
											
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                                                <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a> &nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <?php if ($status == 2) : ?>
                                <a target="_blank" href="../tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-qrcode"></i>&nbsp;Lihat Tanda Terima</a>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <?php elseif ($status != 1) : ?>
                                <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Lihat Dokumen</a>
                                <!-- <a target="_blank" title="Unduh Dokumen" class="btn btn-warning" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a>  -->
                                <a title="Edit Dokumen" href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i>&nbsp;Edit Dokumen</a>
                                <button title="Hapus Dokumen" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>"><i class="fa fa-trash"></i>&nbsp;Hapus Dokumen</button>
                                <?php endif ?>
=======

                                <?php if ($status == 1) : ?>

								<div class="btn-group">
                                    <a target="_blank" href="../tandaterima.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-qrcode"></i></a>
                                    <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i></a>

                                </div>

                                <?php elseif ($status != 1) : ?>
                                    <div class="btn-group">
								
                                    <a target="_blank" title="Lihat Dokumen" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i></a>
									                                    
                                    <!-- <a target="_blank" title="Unduh Dokumen" class="btn btn-warning" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a>  -->

                                    <a title="Edit Dokumen" href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>

                                    <button title="Hapus Dokumen" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                    </div>  
                                <?php endif ?>

>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
<<<<<<< HEAD
        </div>
    </div>
</div>
=======


        </div>

    </div>
</div>


>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
<?php include 'footer.php'; ?>