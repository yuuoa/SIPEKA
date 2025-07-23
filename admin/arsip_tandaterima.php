<?php 
session_start();
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$id = $_GET['id'];
$verifikasi_status = 2;
$arsip_status = 1;
$waktu = date('Y-m-d H:i:s'); 
$tenant = mysqli_query($koneksi, "select * from arsip where arsip_id='$id'");
$d = mysqli_fetch_assoc($tenant);
$atenant = $d['arsip_tenant'];
mysqli_query($koneksi, "update tenant set tenant_sudah='$arsip_status' where tenant_id='$atenant'")or die(mysqli_error($koneksi));
mysqli_query($koneksi, "update arsip set verifikasi_status='$verifikasi_status', arsip_waktu_verifikasi='$waktu' where arsip_id='$id'")or die(mysqli_error($koneksi));
header("location:arsip.php");