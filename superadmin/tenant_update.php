<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$kode = $_POST['kode'];
$username = $_POST['username'];
$jabatan = $_POST['jabatan'];
$teleponwa = $_POST['teleponwa'];
$teleponkantor = $_POST['teleponkantor'];
$emailkantor = $_POST['emailkantor'];

// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username', tenant_kode='$kode', tenant_jabatan='$jabatan', tenant_notelp='$teleponwa', tenant_nokantor='$teleponkantor', tenant_email='$emailkantor' where tenant_id='$id'");
	header("location:tenant.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:tenant.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/tenant/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username', tenant_foto='$x', tenant_kode='$kode', tenant_jabatan='$jabatan', tenant_notelp='$teleponwa', tenant_nokantor='$teleponkantor', tenant_email='$emailkantor' where tenant_id='$id'");		
		header("location:tenant.php?alert=berhasil");
	}
}elseif($filename==""){
	mysqli_query($koneksi, "update tenant set tenant_nama='$nama', tenant_username='$username', tenant_password='$password', tenant_kode='$kode', tenant_jabatan='$jabatan', tenant_notelp='$teleponwa', tenant_nokantor='$teleponkantor', tenant_email='$emailkantor' where tenant_id='$id'");
	header("location:tenant.php");
}

