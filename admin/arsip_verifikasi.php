<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$id = $_POST['id'];
//$keterangan = $_POST['remark'];
$verifikasi_status = 1;
$_POST['validasi_status'] = $verifikasi_status;

$lama = mysqli_query($koneksi,"select * from arsip where arsip_id='$id'");
$l = mysqli_fetch_assoc($lama);

$keterangan = trim($_POST['remark']);
$textAr = explode("\n", $keterangan);
$textAr = array_filter($textAr, 'trim'); // remove any extra \r chars

foreach ($textAr as $line) {
    mysqli_query($koneksi, "update arsip set arsip_keterangan='$keterangan', verifikasi_status='$verifikasi_status' where arsip_id='$id'")or die(mysqli_error($koneksi));
}
header("location:arsip.php");