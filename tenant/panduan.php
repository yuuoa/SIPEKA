<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Panduan</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Panduan</span></li>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Silahkan Pilih Panduan Yang Anda Butuhkan</h3>
                </div>

                <div class="panel-body">

                    <?php 
                    if(isset($_GET['alert'])){
                        if($_GET['alert'] == "sukses"){
                            echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                        }
                    }
                    ?>

                    <form action="gantipassword_act.php" method="post">
                        <div class="form-group">
                            <label>1. Panduan Alur Registrasi</label>
                    
                             <a href="https://www.google.com/" aria-expanded="false"> <span style="color: red" class="mini-click-non">Download alur registrasi</span></a>
                        </div>
                    </form>
					
					<form action="gantipassword_act.php" method="post">
                        <div class="form-group">
                            <label>2. Panduan Ubah Data User</label>
                    
                          <a href="panduan.php" aria-expanded="false"> <span style="color: red" class="mini-click-non">Download Ubah Data User</span></a>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>