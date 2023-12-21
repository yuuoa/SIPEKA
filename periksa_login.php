<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

if($username == "nurdin"){

	$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['admin_id'];
		$_SESSION['nama'] = $data['admin_nama'];
		$_SESSION['username'] = $data['admin_username'];
		$_SESSION['status'] = "admin_login";

		header("location:superadmin/");
	}else{
		header("location:login.php?alert=gagal");
	}

}

elseif($username == "fatur" || $username == "devita"){

	$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['admin_id'];
		$_SESSION['nama'] = $data['admin_nama'];
		$_SESSION['username'] = $data['admin_username'];
		$_SESSION['status'] = "admin_login";

		header("location:admin/");
	}else{
		header("location:login.php?alert=gagal");
	}

}

else
{
		$login = mysqli_query($koneksi, "SELECT * FROM tenant WHERE tenant_username='$username' AND tenant_password='$password'");
		$cek = mysqli_num_rows($login);
		if($cek > 0)
		{
			session_start();
			$data = mysqli_fetch_assoc($login);
			$_SESSION['id'] = $data['tenant_id'];
			$_SESSION['nama'] = $data['tenant_nama'];
			$_SESSION['username'] = $data['tenant_username'];
			$_SESSION['status'] = "tenant_login";
			if ($data['tenant_status'] == 1)
			{
				header("location:tenant/");
			}
			else
			{
				header("location:login.php?alert=belum_aktif");
			}
		}
		else
		{
			header("location:login.php?alert=gagal");
		}


}


