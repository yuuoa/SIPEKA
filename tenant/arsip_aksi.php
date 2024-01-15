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

<<<<<<< HEAD
$semester = date('m');

if($semester <= 1 && $semester >= 6)
{
	$kategori = 4;
}
else
{
	$kategori = 3;
}
=======
$kategori = $_POST['kategori'];
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
$keterangan = '';

if($jenis == "php") {
	header("location:arsip.php?alert=gagal");
}else{
	move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/'.$rand.'_'.$filename);
	$nama_file = $rand.'_'.$filename;
<<<<<<< HEAD
	mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu',NULL,'$tenant','','','$jenis','$kategori','$keterangan','$nama_file','$status')")or die(mysqli_error($koneksi));
=======
	mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu','$tenant','$kategori','$jenis','$keterangan','$nama_file','$status')")or die(mysqli_error($koneksi));
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
	header("location:arsip.php?alert=sukses");
}