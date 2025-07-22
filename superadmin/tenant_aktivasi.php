<?php 
session_start();
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$id = $_POST['id'];
$status = 1;
$kode = strtoupper($_POST['kode']);

$_POST['tenant_status'] = $status;

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == "")
{
	mysqli_query($koneksi, "update tenant set tenant_kode='$kode', tenant_status='$status' where tenant_id='$id'")or die(mysqli_error($koneksi));

	header("location:tenant_preview.php?id=$id");
}
else
{
    move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/tenant/'.$rand.'_'.$filename);
    $file_gambar = $rand.'_'.$filename;

    mysqli_query($koneksi, "update tenant set tenant_kode='$kode', tenant_status='$status', tenant_foto='$file_gambar' where tenant_id='$id'")or die(mysqli_error($koneksi));

    header("location:tenant_preview.php?id=$id");
}

?>
