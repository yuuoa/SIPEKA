<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tanda Terima Elektronik</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="./gambar/sistem/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <?php 
            include 'koneksi.php';
        ?>
    </head>
    <body>
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel">
                    
                    <?php 
                        $id = $_GET['id'];  
                        $data = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,tenant WHERE arsip_tenant=tenant_id and arsip_kategori=kategori_id and arsip_id='$id'");
                        while($p = mysqli_fetch_array($data))
                        {
                            $status = $p['verifikasi_status'];
                    ?>
                    <div class="panel-body">
                        <button class="btn btn-primary hidden-print" onclick="window.print()">Cetak</button>
                        <center>    
                            <div class="container"  style="width: 595px;height: 842px; ">
                            <center>
                                <a><img class="main-logo" style="width: 200px;height: 80px; margin-top: 5px; margin-bottom: 15px;"  src="./assets/img/logo/logokim.png" alt="" /></a>
                                <h3>TANDA TERIMA ELEKTRONIK </h3><h4> SISTEM PELAPORAN ELEKTRONIK KAWASAN INDUSTRI <br> MITRA KARAWANG (SIPEKA)</h4>
                                <hr style="line-height: 3px; border-color: black">
                                <tbody>
                                    <p style="text-align: justify">Berdasarkan data dibawah ini </b>dengan ini menerangkan bahwa :</p>
                                    <table width="80%" style="text-align: justify">
                                        <tr>
                                            <th>Kode Arsip</th>
                                            <td width="5%">:</td>
                                            <td>
                                                <?php
                                                    echo $p['arsip_kode'];
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <td width="5%">:</td>
                                            <td><?php echo $p['tenant_nama'] ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Waktu Upload</th>
                                            <td width="5%">:</td>
                                            <td><?php echo date('H:i:s d-m-Y ',strtotime($p['arsip_waktu_upload'])) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Tanda Terima</th>
                                            <td width="5%">:</td>
                                            <td><?php echo date('H:i:s d-m-Y ',strtotime($p['arsip_waktu_verifikasi'])) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kategori</th>
                                            <td width="5%">:</td>
                                            <td><?php echo $p['kategori_nama']; ?></td>
                                        </tr>                                
                                    </table>
                                </tbody>
                                <?php if ($status == 2) : ?>
                                    <a><img class="main-logo" style="width: 100px; margin-top: 30px; margin-bottom: 10px;"  src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://sipeka.kimresidence.co.id/tandaterima.php?id=<?php echo $id ?>" alt="" /></a>
                                    <p style="text-align: justify">
                                    Dokumen ini sah, diterbitkan secara elektronik melalui SIPEKA Pengelola Kawasan Industri Mitrakarawang sehingga tidak memerlukan cap dan tanda tangan basah.</b>Surat Keterangan ini dibuat sebagai kelengkapan pengurusan <b></b>.</p>
                                <p style="text-align: justify">Terima kasih telah menyampaikan laporan pengelolaan dan pemantauan lingkungan</p>
                                <hr style="line-height: 3px; border-color: black ">
                                <?php else : ?>
                                    <a><img class="main-logo" style="width: 200px; margin-top: 50px; margin-bottom: 50px;"  src="./gambar/sistem/belumverifikasi.png" alt="" /></a>
                                    <p style="text-align: justify">
                                <?php endif ?>
                                <?php 
                                    }
                                ?>
                            </center>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>