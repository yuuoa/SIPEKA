<?php 
$belum = 0;
$tenant = mysqli_query($koneksi,"SELECT * FROM tenant WHERE tenant_sudah=$belum ORDER BY tenant_id DESC");

while($p = mysqli_fetch_array($tenant)){
    echo ($p['tenant_email'].",");
}
?>
?&subject=Anda belum memiliki tanda terima SIPEKA&body=
<?php echo "Yth, Bapak/Ibu Perwakilan Perusahaan,";?>%0D%0A%0D%0A