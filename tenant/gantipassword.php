<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Ganti Password</h3>
                    </div>

                    <div class="panel-body">

                        <?php 
                        if(isset($_GET['alert'])){
                            if($_GET['alert'] == "sukses"){
                                echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'>Password tidak sama!</div>";
                            }
                        }
                        ?>

                        <form action="gantipassword_act.php" method="post">
                            <div class="form-group">
                                <label>Masukkan Password Baru</label>
                                <input type="password" class="form-control" placeholder="Masukkan Password Baru .." name="password2" required="required" min="5" id="txtNewPassword" onpageshow="isPasswordMatch();" />
                                <br>
                                <label>Ulangi Password</label>
                                <input type="password" class="form-control" placeholder="Ulangi Password .." name="password" required="required" min="5" id="txtConfirmPassword" onpageshow="isPasswordMatch();" />
                                <p></p><div id="divCheckPassword"></div></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan" id='hulk'></input>
                            </div>
                        </form>

                    </div>

                    </div>
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