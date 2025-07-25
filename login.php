<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Sistem Informasi Arsip Digital</title>
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
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
            <img  src="gambar/sistem/logo.png"  style="width: 200px;">
            </div>
            <br><br>
            <div class="content-error">
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!.</div>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT.</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD.</div>";
                    }else if($_GET['alert'] == "akun_baru"){
                        echo "<div class='alert alert-success'>AKUN ANDA SUDAH TERDAFTAR.<br> SILAHKAN TUNGGU EMAIL KONFIRMASI DARI KAMI.</div>";
                    }else if($_GET['alert'] == "belum_aktif"){
                        echo "<div class='alert alert-danger'>MAAF, AKUN ANDA BELUM AKTIF<br>SILAHKAN MENUNGGU EMAIL LANJUTAN DARI KAMI.</div>";
                    }
                }
                ?>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="periksa_login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="email" title="Please enter you username or email" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="********" required="required" autocomplete="off" name="password" id="password" class="form-control">
                            </div>        
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                            </div>
                    </div> 
                        </form>
                    <br>
                    <center>
                            <table>
                                <tr>
                                    <a href="./panduan/Format_Laporan_RKL_RPL.pdf" class="btn-sm btn-primary" target="_blank">Format Laporan RKL RPL</a>
                                </tr>
                                <tr>
                                    <a href="./panduan/Manual_Sistem_Pelaporan_Lingkungan_KIM.pdf" class="btn-sm btn-primary" target="_blank">Panduan SIPEKA</a>
                                </tr>
                            </table>
                            <a href="buat_akun.php" class="btn-sm btn-primary" >Buat Akun</a>
                        </center>
            <br>
            <div class="text-center login-footer">
                <p class="text-muted"><?php include 'version.php'; ?></p>
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