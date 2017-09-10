<?php 

	session_start();

	$nama = $_POST["nama"];
	$nik = $_POST["nik"];
	$tempatlahir = $_POST["tempatlahir"];
	$tanggallahir = $_POST["tanggallahir"];
	$alamat = $_POST["alamat"];
	$nohp = $_POST["nohp"];
	$password = md5($_POST["nik"]);

	include "../../../config/koneksi.php";

	$sql = "INSERT INTO tb_user_akun (username, password, hak_akses, status) VALUES ('$nik','$password','asmen','1')";
	$proses = mysqli_query($conn,$sql);
	$userakun_id = mysqli_insert_id($conn);

	if ($proses){

		$sql2 = "INSERT INTO tb_detail_asmen (user_akun_id, nik, nama,tempat_lahir, tgl_lahir, alamat, nomor_hp) VALUES ('$userakun_id', '$nik','$nama', '$tempatlahir', '$tanggallahir', '$alamat', '$nohp')";
		$proses2 = mysqli_query($conn, $sql2);

		if ($proses2){

			$_SESSION["flash"] = "sukses";
			$_SESSION["message"] = "Data Asisten Manajer berhasil ditambahkan!";
			header("Location: ../main.php?page=input-asmen");

		} else {

			$_SESSION["flash"] = "gagal";
			$_SESSION["message"] = "Telah terjadi kesalahan!";
			header("Location: ../main.php?page=input-asmen");

		}

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=input-asmen");

	}

?>

