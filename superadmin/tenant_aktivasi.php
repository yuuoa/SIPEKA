<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$id = $_POST['id'];
$status = 1;
$kode = strtoupper($_POST['kode']);

$_POST['tenant_status'] = $status;

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/tenant/'.$rand.'_'.$filename);
$file_gambar = $rand.'_'.$filename;

mysqli_query($koneksi, "update tenant set tenant_kode='$kode', tenant_status='$status', tenant_foto='$file_gambar' where tenant_id='$id'")or die(mysqli_error($koneksi));

header("location:tenant_preview.php?id=$id");

// $data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
// while($d = mysqli_fetch_array($data))
// {
//     ini_set('SMTP', "mitrakarawang.com");
//     ini_set('smtp_port', "465");
//     ini_set('sendmail_from', "It_KiM@mitrakarawang.com");
//     $to = "alwanandika@gmail.com";
//     $subject = "HTML email";

//     $message = "
//     <html>
//     <head>
//     <title>HTML email</title>
//     </head>
//     <body>
//     <p>This email contains HTML Tags!</p>
//     <table>
//     <tr>
//     <th>Firstname</th>
//     <th>Lastname</th>
//     </tr>
//     <tr>
//     <td>John</td>
//     <td>Doe</td>
//     </tr>
//     </table>
//     </body>
//     </html>
//     ";

//     // Always set content-type when sending HTML email
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // More headers
//     $headers .= 'From: <It_KiM@mitrakarawang.com>' . "\r\n";
//     $headers .= 'Cc: alwanandika@gmail.com' . "\r\n";

//     mail($to,$subject,$message,$headers);
// }

?>