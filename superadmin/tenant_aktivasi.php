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

$data = mysqli_query($koneksi, "select * from tenant where tenant_id='$id'");
while($d = mysqli_fetch_array($data))
{
    $to = $d['tenant_email'];
    $subject = "MASUK SIPEKA";

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>";
    $message .= $d['tenant_password'];
    $message .= "
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: alwanandika@gmail.com' . "\r\n";
    
    mail($to,$subject,$message,$headers);
}

?>