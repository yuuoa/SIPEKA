<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s'); 
$tenant = $_SESSION['id'];
$kode  = '';
$nama  = '';

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = '';

if($jenis == "php") {
	header("location:arsip.php?alert=gagal");
}else{
	move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/'.$rand.'_'.$filename);
	$nama_file = $rand.'_'.$filename;
	mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu','$tenant','$kategori','$jenis','$keterangan','$nama_file','$status')")or die(mysqli_error($koneksi));
	header("location:arsip.php?alert=sukses");
}