<?php 
include './koneksi.php';

$rand = rand(100,9999);
$username = $_POST['username'];
$nama  = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$teleponwa = $_POST['teleponwa'];
$teleponkantor = $_POST['teleponkantor'];
$emailkantor = $_POST['emailkantor'];
$password = $rand*$rand;

$allowed =  array('pdf');
$filename = $_FILES['suratkuasa']['name'];

$path = dirname(__FILE__)."/arsip/dokumen_tenant/";

$ext = pathinfo($filename, PATHINFO_EXTENSION);

	move_uploaded_file($_FILES['suratkuasa']['tmp_name'], $path.$rand.'_'.$filename);
	$file_dokumen = $rand.'_'.$filename;
	mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$jabatan','$password','',0,'$teleponwa','$teleponkantor','$emailkantor','','$file_dokumen','')");
	header("location:login.php?alert=akun_baru");
