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

    <?php 
    include '../koneksi.php';
    ?>

<div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">

            <?php 
                $id = $_GET['id'];  
                $data = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,tenant WHERE arsip_tenant=tenant_id and arsip_kategori=kategori_id and arsip_id='$id'");
                while($p = mysqli_fetch_array($data)){
            ?>
            <?php                                     
                $status = $p['verifikasi_status'];
            ?> 

                <div class="panel-body">
                    <center>
                        
                        <div class="container"  style="width: 595px;height: 842px; ">
                        <center>                    
                        <a><img class="main-logo" style="width: 200px;height: 80px; margin-top: 5px; margin-bottom: 15px;"  src="../assets/img/logo/logokim.png" alt="" /></a>
                        <h3>TANDA TERIMA ELEKTRONIK </h3><h4> SISTEM PELAPORAN ELEKTRONIK KAWASAN INDUSTRI <br> MITRA KARAWANG (SIPEKA)</h4>
                        <hr style="line-height: 3px; border-color: black">
                    </center>

                    <tbody>
                        
                        <p style="text-align: justify">Berdasarkan data dibawah ini </b>dengan ini menerangkan bahwa :</p>
                        <center>
                            <table width="80%">
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <td width="5%">:</td>
                                    <td><?php echo $p['tenant_nama'] ?></td>
                                </tr>
                                <tr>
                                    <th>Kode Arsip</th>
                                    <td width="5%">:</td>
                                    <td><?php echo $p['arsip_kode']; ?></td>
                                </tr>
                                <tr>
                                    <th>Waktu Upload</th>
                                    <td width="5%">:</td>
                                    <td><?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kegiatan</th>
                                    <td width="5%">:</td>
                                    <td><?php echo $p['arsip_nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td width="5%">:</td>
                                    <td><?php echo $p['kategori_nama']; ?></td>
                                </tr>
                           
                        </tbody>
                    </table>

                    <?php if ($status == 1) : ?>
                        <a><img class="main-logo" style="width: 200px; margin-top: 50px; margin-bottom: 50px;"  src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://localhost/arsip/tenant/arsip_tandaterima.php?id=<?php echo $id ?>" alt="" /></a>
                        <p style="text-align: justify">
                        Dokumen ini sah, diterbitkan secara elektronik melalui SIPEKA Pengelola Kawasan Industri Mitrakarawang sehingga tidak memerlukan cap dan tanda tangan basah.</b>Surat Keterangan ini dibuat sebagai kelengkapan pengurusan <b></b>.
                    </p>
                    <p style="text-align: justify">
                        Terima kasih telah menyampaikan laporan pengelolaan dan pemantauan lingkungan
                    </p>
                    
             
                    <hr style="line-height: 3px; border-color: black ">

                    <?php else : ?>
                        <a><img class="main-logo" style="width: 200px; margin-top: 50px; margin-bottom: 50px;"  src="../gambar/sistem/belumverifikasi.png" alt="" /></a>
                        <p style="text-align: justify">
                    <?php endif ?>

                    <?php 
                                }
                            ?>
                </center>
        </div>
</div>
</div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>