<?php include 'header.php'; include 'breadcome.php';?>

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

                        <p style="color:red;"><em>*wajib diisi</em></p>
                        
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required="required">
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
                            <label>File</label><i style="color:red;"><em>*</em></i>
                            <input type="file" id= "filess" name="file" accept=".pdf" required>
							<p style="color:red;"><em>.PDF Max. 10MB</em></p>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Upload">
							
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">
var uploadField = document.getElementById("filess");
uploadField.onchange = function() {
    if(this.files[0].size > 10000000){ // 1000000 untuk 1 MB.
       alert("Maaf. File Terlalu Besar ! Maksimal Upload 10MB");
       this.value = "";
    };
};
</script>

<?php include 'footer.php'; ?>