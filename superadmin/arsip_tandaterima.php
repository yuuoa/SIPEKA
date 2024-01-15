<?php 
include '../koneksi.php';
<<<<<<< HEAD

session_start();
date_default_timezone_set('Asia/Jakarta');
$id = $_GET['id'];
$verifikasi_status = 2;
$waktu = date('Y-m-d H:i:s'); 

mysqli_query($koneksi, "update arsip set verifikasi_status='$verifikasi_status', arsip_waktu_verifikasi='$waktu' where arsip_id='$id'")or die(mysqli_error($koneksi));
=======
$id = $_GET['id'];
$verifikasi_status = 2;

mysqli_query($koneksi, "update arsip set verifikasi_status='$verifikasi_status' where arsip_id='$id'")or die(mysqli_error($koneksi));
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
header("location:arsip.php");
