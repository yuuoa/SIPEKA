<?php
    include '../koneksi.php';
    session_start();
    if($_SESSION['status'] != "tenant_login"){
        header("location:../login.php?alert=belum_login");
        header('Access-Control-Allow-Origin: *'); 
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
    }
    ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tenant - Sistem Informasi Arsip Digital KIM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../gambar/sistem/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    
</head>
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class=""><div class="sidebar-header ">
                <a><img class="main-logo " style="margin-top: 20px" src="../gambar/sistem/logo.png" alt="" width = "150px" /></a>
                <strong><a><img src="../gambar/sistem/logo-icon.png" alt="" width="40px"/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar hidden-print">

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="index.php">
                                <span class="fa fa-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="arsip.php" aria-expanded="false"><span class="fa fa-file-text icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Arsip Saya</span></a>
                        </li>

						 <li>
                            <a href="panduan.php" aria-expanded="false"><span class="fa fa-book icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Panduan</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    
    <div class="all-content-wrapper ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper hidden-print">
                                <div class="row hidden-print">
                                    <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                         <div class="col-lg-12 col-md-12">
                                        </div>
                                
                                </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <?php 
                                                    $id_tenant = $_SESSION['id'];
                                                    $profil = mysqli_query($koneksi,"select * from tenant where tenant_id='$id_tenant'");
                                                    $profil = mysqli_fetch_assoc($profil);
                                                    if($profil['tenant_foto'] == ""){ 
                                                      ?>
                                                      <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                  <?php }else{ ?>
                                                    <img src="../gambar/tenant/<?php echo $profil['tenant_foto'] ?>" style="width: 20px;height: 20px">
                                                <?php } ?>
                                                <span class="admin-name"><?php echo $_SESSION['nama']; ?></span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="profil.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                                <li><a href="gantipassword.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>Ganti Password</a></li>
                                                <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area hidden-print">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li class="active">
                                    <a href="index.php">
                                        <span class="fa fa-home icon-wrap"></span>
                                        <span class="mini-click-non">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="arsip.php" aria-expanded="false"><span class="fa fa-file-text icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Arsip Saya</span></a>
                                </li>
                                <li>
                                    <a href="panduan.php" aria-expanded="false"><span class="fa fa-book icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Panduan</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>