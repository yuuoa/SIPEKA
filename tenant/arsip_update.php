<?php 
session_start();
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$id  = $_POST['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$rand = rand();
$filename = $_FILES['file']['name'];
$kategori = $_POST['kategori'];
$keterangan = "";
$status = 0;
if($filename == ""){
	mysqli_query($koneksi, "update arsip set arsip_kode='$kode', arsip_nama='$nama', arsip_kategori='$kategori', arsip_keterangan='$keterangan', verifikasi_status='$verifikasi_status' where arsip_id='$id'")or die(mysqli_error($koneksi));	
	header("location:arsip.php");
}else{
	$_POST['validasi_status'] = 0;
	$jenis = pathinfo($filename, PATHINFO_EXTENSION);
	if($jenis == "php") {
		header("location:arsip.php?alert=gagal");
	}else{
		// hapus file lama
		$lama = mysqli_query($koneksi,"select * from arsip where arsip_id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['arsip_file'];
		unlink("../arsip/".$nama_file_lama);
		// upload file baru
		move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update arsip set arsip_kode='$kode', arsip_nama='$nama', arsip_jenis='$jenis', arsip_kategori='$kategori', arsip_keterangan='$keterangan', arsip_file='$nama_file', verifikasi_status='$status' where arsip_id='$id'")or die(mysqli_error($koneksi));
		header("location:arsip.php?alert=sukses");
	}
}