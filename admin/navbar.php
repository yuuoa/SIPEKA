<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header ">
                <a href="index.html"><img class="main-logo" style="margin-top: 20px" src="../gambar/sistem/logo.png" width="150px" alt="" /></a>
                <strong><a href="index.html"><img src="../gambar/sistem/logo-icon.png" width="40px" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="index.php">
                                <span class="fa fa-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li><a href="tenant.php" aria-expanded="false"><span class="fa fa-users icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Tenant</span></a></li>
                        <li><a href="arsip.php" aria-expanded="false"><span class="fa fa-file-text icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro"><a href="index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a></div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <?php 
                                                $id_admin = $_SESSION['id'];
                                                $profil = mysqli_query($koneksi,"select * from admin where admin_id='$id_admin'");
                                                $profil = mysqli_fetch_assoc($profil);
                                                if($profil['admin_foto'] == ""){ 
                                                ?>
                                                <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                <?php }else{ ?>
                                                <img src="../gambar/admin/<?php echo $profil['admin_foto'] ?>" style="width: 20px;height: 20px">
                                                <?php } ?>
                                                <span class="admin-name"><?php echo $_SESSION['nama']; ?> [ <b>Administrator</b> ]</span>
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
    <div class="mobile-menu-area">
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
                                <li><a href="tenant.php" aria-expanded="false"><span class="fa fa-users icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Tenant</span></a></li>
                                <li><a href="arsip.php" aria-expanded="false"><span class="fa fa-file icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>