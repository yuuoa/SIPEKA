<?php 
include './koneksi.php';

$rand = rand();
$username = $_POST['username'];
$nama  = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$teleponwa = $_POST['teleponwa'];
$teleponkantor = $_POST['teleponkantor'];
$emailkantor = $_POST['emailkantor'];
$password = $rand;

$allowed =  array('gif','png','jpg','jpeg','pdf');
$filename = $_FILES['suratkuasa']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

	move_uploaded_file($_FILES['suratkuasa']['tmp_name'], './arsip/dokumen_tenant/'.$rand.'_'.$filename);
	$file_dokumen = $rand.'_'.$filename;
	mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$jabatan','$password','',0,'$teleponwa','$teleponkantor','$emailkantor','','$file_dokumen')");
	header("location:login.php?alert=akun_baru");
