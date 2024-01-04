<?php 
include '../koneksi.php';

$username = $_POST['username'];
$nama  = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$teleponwa = $_POST['teleponwa'];
$teleponkantor = $_POST['teleponkantor'];
$emailkantor = $_POST['emailkantor'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$jabatan','$password','',,'$teleponwa','$teleponkantor','$emailkantor','','')");
	header("location:tenant.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:tenant.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/tenant/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$jabatan','$password','$file_gambar','$teleponwa','$teleponkantor','$emailkantor','','')");
		header("location:tenant.php");
	}
}

