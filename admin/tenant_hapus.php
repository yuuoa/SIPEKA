<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['tenant_foto'];
unlink("../gambar/tenant/$foto");
mysqli_query($koneksi, "delete from tenant where tenant_id='$id'");
header("location:tenant.php");
