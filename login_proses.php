<?php
session_start();

$username= $_POST["username"];
$password=md5($_POST["password"]);

include "config/koneksi.php";

$query = "select * from tb_user_akun where username = '$username' and password = '$password'";
$hasil = mysqli_query($conn, $query) or die (mysqli_error($conn)) ;

if (mysqli_num_rows($hasil) > 0)
{
	$data=mysqli_fetch_assoc ($hasil);
	
	if ($data["status"]==1)
	{
		$user_akun_id = $data["id"];
		$hakakses = $data["hak_akses"];
		$username = $data["username"];

		if ($hakakses == 'admin') {
			$table = 'tb_detail_admin';
		} elseif ($hakakses == 'staff') {
			$table = 'tb_detail_staff';
		} elseif ($hakakses == 'asmen') {
			$table = 'tb_detail_asmen';
		} elseif ($hakakses == 'instruktur') {
			$table = 'tb_detail_instruktur';
		} elseif ($hakakses == 'peserta') {
			$table = 'tb_detail_peserta';
		}

		$sql = "SELECT (nama) FROM $table WHERE user_akun_id = '$user_akun_id'";
		$proses = mysqli_query($conn, $sql);
		$detail = mysqli_fetch_assoc($proses);		

		$_SESSION["username"] = $username;
		$_SESSION["nama"] = $detail["nama"];
		$_SESSION["hak_akses"] = $hakakses;
		
		if ($hakakses=="admin")
		{
			header("Location:views/admin/main.php?page=home");
		}
		elseif ($hakakses=="asmen") {
			header("Location:views/asmen/home.php");
		}
		elseif ($hakakses=="staff") {
			header("Location:views/staff/home.php");
		}
		elseif ($hakakses=="instruktur") {
			header("Location:views/instruktur/home.php");
		}
		elseif ($hakakses=="peserta") {
			
			header("Location:views/peserta/main.php?page=home");
		}

	}
	else {
		header("Location:login.php");
	}
}
else {
	header("Location:login.php");
}



?>