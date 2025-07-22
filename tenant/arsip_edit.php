<?php include 'header.php'; include 'breadcome.php';?>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Edit Arsip</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="arsip.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <form method="post" action="arsip_update.php" enctype="multipart/form-data">

                            <div class="form-group">
                                  <input type="hidden" name="id" value="<?php echo $d['arsip_id']; ?>">
                                <input type="hidden" type="text" class="form-control" name="kode" required="required" value="<?php echo $d['arsip_kode']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="hidden" type="text" class="form-control" name="nama" required="required" value="<?php echo $d['arsip_nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori" required="required">
                                    <!-- <option value="">Pilih kategori</option> -->
                                    <?php 
                                    $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                    while($k = mysqli_fetch_array($kategori)){
                                        ?>
                                        <option <?php if($k['kategori_id'] == $d['arsip_kategori']){echo "selected='selected'";} ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                        <?php 
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>File</label>
                                <input type="file" name="file" accept=".pdf" required>
							    <p style="color:red;"><em>.pfd, .jpeg, .png. Max. 5MB</em></p>
                                <small>Kosongkan jika tidak ingin mengubah file</small>
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Upload">
                            </div>

                        </form>
                        <script type="text/javascript">
                            var uploadField = document.getElementById("file");
                            uploadField.onchange = function() {
                                if(this.files[0].size > 5000000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
                                alert("Maaf. File Terlalu Besar ! Maksimal Upload 2MB");
                                this.value = "";
                                };
                            };
                        </script>

                        <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>