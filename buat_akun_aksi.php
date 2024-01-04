<?php 
include './koneksi.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$jabatan = $_POST['jabatan'];
$teleponwa = $_POST['teleponwa'];
$teleponkantor = $_POST['teleponkantor'];
$emailkantor = $_POST['emailkantor'];
$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$foto = $_FILES['foto']['name'];
$suratkuasa = $_FILES['suratkuasa']['name'];

if($foto == "")
{
	mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$jabatan,'$password','',NULL,'$teleponwa','$teleponkantor','$emailkantor','','$suratkuasa')");
	header("location:login.php?alert=akun_baru");
}
else
{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:login.php?alert=akun_baru");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], './gambar/tenant/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into tenant values (NULL,'$nama','$username','$password','$file_gambar')");
		header("location:login.php?alert=akun_baru");
	}
}

