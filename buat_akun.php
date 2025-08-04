<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buat Akun | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="gambar/sistem/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
<?php 
    include 'koneksi.php';
?>
</head>
<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
             <div class="text-center custom-login">
            <img  src="gambar/depan/logo.png"  style="width: 200px;">
            </div>
            <br>
            <br>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                    <div class="">
                                <a href="login.php" class="btn-sm btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
                            </div>      
                        <form method="post" action="./buat_akun_aksi.php" enctype="multipart/form-data">
                            <div class="form-group">                            
                                <center>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar Akun Baru</h3>
                                </div>
                                </center>
                            </div>
                            <p style="color:red;"><em>*wajib diisi</em></p>
                            <div class="form-group">
                                <label>Nama Lengkap</label><i style="color:red;"><em>*</em></i>
                                <input type="text" class="form-control" name="username" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nama Perusahaan</label><i style="color:red;"><em>*</em></i>
                                <input type="text" class="form-control" name="nama" required="required">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label><i style="color:red;"><em>*</em></i>
                                <input type="text" class="form-control" name="jabatan" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon (WhatsApp)</label><i style="color:red;"><em>*</em></i>
                                <input type="text" class="form-control" name="teleponwa" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Kantor</label><i style="color:red;"><em>*</em></i>
                                <input type="text" class="form-control" name="teleponkantor" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email Kantor</label><i style="color:red;"><em>*</em></i>
                                <input type="email" class="form-control" name="emailkantor" required="required">
                            </div>
                            <div class="form-group">
                                <label>Dokumen Surat Kuasa</label><i style="color:red;"><em>*</em></i>
                                <input type="file" id= "file" name="suratkuasa"  accept=".pdf" required>
                                <p style="color:red;"><em>.PDF Max. 5MB</em></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block loginbtn" value="Simpan">
                            </div> 
                        </div>                        
            <br>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. PT. Mitra Karawangjaya</p>
            </div>
            </div>
        </div>   
    </div>

    <script type="text/javascript">
        var uploadField = document.getElementById("file");
        uploadField.onchange = function() {
            if(this.files[0].size > 5000000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
            alert("Maaf. File Terlalu Besar ! Maksimal Upload 5MB");
            this.value = "";
            };
        };
    </script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>