<?php 
session_start();
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');
try {
    $saya = $_SESSION['id'];
    $waktu = date('Y-m-d H:i:s'); 
    $tenant = $_SESSION['id'];
    $kodee = mysqli_query($koneksi,"SELECT tenant_kode FROM tenant WHERE tenant_id='$saya'");
    while($kood = mysqli_fetch_array($kodee)){
        $tent = $kood['tenant_kode'];
    }
    $aidi = mysqli_query($koneksi,"SELECT arsip_id FROM arsip ORDER BY arsip_id ASC");
    while($idi = mysqli_fetch_array($aidi)){
        $iid = $idi['arsip_id'];
    }
    if ($iid == 1)
        $iid = 0;
    $romawi = '';
    switch (date('m')){
        case 1: $romawi = 'I'; break;
        case 2: $romawi = 'II'; break;
        case 3: $romawi = 'III'; break;
        case 4: $romawi = 'IV'; break;
        case 5: $romawi = 'V'; break;
        case 6: $romawi = 'VI'; break;
        case 7: $romawi = 'VII'; break;
        case 8: $romawi = 'VIII'; break;
        case 9: $romawi = 'IX'; break;
        case 10: $romawi = 'X'; break;
        case 11: $romawi = 'XI'; break;
        case 12: $romawi = 'XII'; break;
    }
  $kode  = ($iid+1)."/"."KIM-".$tent."/".$romawi.'-'.date('Y');
  $nama  = '';
  $rand = rand();
  $filename = $_FILES['file']['name'];
  $filetemp = $_FILES['file']['tmp_name'];
  $jenis = pathinfo($filename, PATHINFO_EXTENSION);
  $kategori = $_POST['kategori'];
  $target_dir = "../arsip/";
  $nama_file = $rand.'_'.$filename;
  if($jenis == "php") {
    header("location:arsip.php?alert=gagal");
  }else{
    move_uploaded_file($filetemp, $target_dir.$nama_file);
    mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu',NULL,'$tenant','$kode','','$jenis','$kategori','$keterangan','$nama_file','$status')")or die(mysqli_error($koneksi));
    header("location:arsip.php?alert=sukses");
  }
} catch (Exception $e) {
    return $e->getMessage();
}
