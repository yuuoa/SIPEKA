<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Upload Arsip</h4>
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


    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Upload arsip</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="arsip.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                    <form method="post" action="arsip_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Arsip (Kode.Bulan.Tahun)</label> 
                            <input type="text" class="form-control" name="kode" required="required"  placeholder="Ex. KIM.05.2022">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kegiatan</label>
                            <input type="text" class="form-control" name="nama" required="required" placeholder="Ex. Otomotif">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required="required">
                                <!-- <option value="">Pilih kategori</option> -->
                                <?php 
                                $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                while($k = mysqli_fetch_array($kategori)){
                                    ?>
                                    <option value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                            </div>

                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" accept=".pdf,.jpeg,.png">
							<p style="color:red;"><em>.pfd, .jpeg, .png. Max. 2MB</em></p>
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Upload">
							
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">
var uploadField = document.getElementById("file");
uploadField.onchange = function() {
    if(this.files[0].size > 200000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
       alert("Maaf. File Terlalu Besar ! Maksimal Upload 800 KB");
       this.value = "";
    };
};
</script>


<?php include 'footer.php'; ?>