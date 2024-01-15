<?php 
include '../koneksi.php';

session_start();
date_default_timezone_set('Asia/Jakarta');
$id = $_GET['id'];
$verifikasi_status = 2;
$waktu = date('Y-m-d H:i:s'); 

mysqli_query($koneksi, "update arsip set verifikasi_status='$verifikasi_status', arsip_waktu_verifikasi='$waktu' where arsip_id='$id'")or die(mysqli_error($koneksi));
header("location:arsip.php");
