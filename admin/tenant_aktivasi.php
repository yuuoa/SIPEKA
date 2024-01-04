<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$id = $_POST['id'];
$status = 1;
$kode = strtoupper($_POST['kode']);

$_POST['tenant_status'] = $status;

mysqli_query($koneksi, "update tenant set tenant_kode='$kode', tenant_status='$status' where tenant_id='$id'")or die(mysqli_error($koneksi));
header("location:tenant_preview.php?id=$id");