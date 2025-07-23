<?php include 'header.php'; include 'breadcome.php';?>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from tenant where tenant_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">
                            <img src="../assets/img/product/profile-bg.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-product-text">
                        <?php 
                        if($s['tenant_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/tenant/<?php echo $s['tenant_foto']; ?>">
                            <?php
                        }
                        ?>
                        <br><br>
                        <h4><?php echo $s['tenant_nama']; ?></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "sukses"){
                        echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                    }
                }
                ?>
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Data Diri</h4>
                    </div>
                    <div class="panel-body">
                        <form action="profil_act.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama .." name="nama" required="required" value="<?php echo $s['tenant_nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Masukkan Username .." name="username" required="required" value="<?php echo $s['tenant_username'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                                <small>Kosongkan jika tidak ingin mengubah foto.</small>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>