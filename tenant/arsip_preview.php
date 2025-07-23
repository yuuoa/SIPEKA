<?php include 'header.php'; include 'breadcome.php';?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">
                <div class="panel-body">
                    <a href="arsip.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <br><br>
                    <?php 
                    $id = $_GET['id'];  
                    $data = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,tenant WHERE arsip_tenant=tenant_id and arsip_kategori=kategori_id and arsip_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <table class="table">
                                    <tr>
                                        <th>Kode Arsip</th>
                                        <td>
                                            <?php
                                            echo $d['arsip_kode'];
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Upload</th>
                                        <td><?php echo date('H:i:s  d-m-Y',strtotime($d['arsip_waktu_upload'])) ?></td>
                                    </tr>
									<tr>
                                        <th>Perusahaan</th>
                                        <td><?php echo $d['tenant_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><?php echo $d['kategori_nama']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-8">
                                <?php 
                                if($d['arsip_jenis'] == "png" || $d['arsip_jenis'] == "jpg" || $d['arsip_jenis'] == "gif" || $d['arsip_jenis'] == "jpeg"){
                                    ?>
                                    <img src="../arsip/<?php echo $d['arsip_file']; ?>">
                                    <?php
                                }elseif($d['arsip_jenis'] == "pdf"){
                                    ?>
                                    <div class="pdf-singe-pro">
                                        <a class="media" href="../arsip/<?php echo $d['arsip_file']; ?>"></a>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <p>Preview tidak tersedia, silahkan <a target="_blank" style="color: blue" href="../arsip/<?php echo $d['arsip_file']; ?>">Download di sini.</a></p>.
                                    <?php
                                }
                                ?>
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