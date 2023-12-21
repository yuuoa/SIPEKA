<?php 
include '../koneksi.php';
$id = $_GET['id'];
$verifikasi_status = 1;

mysqli_query($koneksi, "update arsip set verifikasi_status='$verifikasi_status' where arsip_id='$id'")or die(mysqli_error($koneksi));
header("location:arsip.php");
