<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buat Akun | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
                                <button target="login.php" class="btn-link"><i class="fa fa-arrow-left"></i> Kembali</button>
                            </div>      
                        <form method="post" action="buat_akun_aksi.php" enctype="multipart/form-data">
                            <div class="form-group">      
                            
                            <center>
                            <div class="panel-heading">
                                <h3 class="panel-title">Daftar Akun Baru</h3>
                            </div>
                            </center>
                                <div class="form-group">
                                <label>Nama Perusahaan / Tenant</label>
                                <input type="text" class="form-control" name="nama" required="required">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="foto">
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" accept=".pdf,.jpeg,.png">
							<p style="color:red;"><em>.pfd, .jpeg, .png. Max. 2MB</em></p>
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