<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);

// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username' where tenant_id='$id'");
	header("location:tenant.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:tenant.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/tenant/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username', tenant_foto='$x' where tenant_id='$id'");		
		header("location:tenant.php?alert=berhasil");
	}
}elseif($filename==""){
	mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username', tenant_password='$password' where tenant_id='$id'");
	header("location:tenant.php");
}

