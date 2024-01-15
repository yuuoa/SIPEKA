<?php 
include '../koneksi.php';
$id = $_GET['id'];
$status = 0;

mysqli_query($koneksi, "update tenant set tenant_status='$status' where tenant_id='$id'")or die(mysqli_error($koneksi));
header("location:tenant_preview.php?id=$id");
