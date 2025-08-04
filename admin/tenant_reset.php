<?php 
include '../koneksi.php';
$sudah = 0;
$tenant = mysqli_query($koneksi,"SELECT * FROM tenant ORDER BY tenant_id DESC");
    while($p = mysqli_fetch_array($tenant)){
        mysqli_query($koneksi, "update tenant set tenant_sudah='$sudah'")or die(mysqli_error($koneksi));
    }
header("location:tenant.php");
