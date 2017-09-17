<?php 

	session_start();

	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$jekel = $_POST["jekel"];
	$tempatlahir = $_POST["tempatlahir"];
	$tanggallahir = $_POST["tanggallahir"];
	$alamat = $_POST["alamat"];
	$nohp = $_POST["nohp"];
	$password = md5($_POST["nik"]);

	include "../../../config/koneksi.php";

	$sql = "INSERT INTO tb_user_akun (username, password, hak_akses, status) VALUES ('$nik','$password','instruktur','1')";
	$proses = mysqli_query($conn,$sql);
	$userakun_id = mysqli_insert_id($conn);

	if ($proses){

		$sql2 = "INSERT INTO tb_detail_instruktur (user_akun_id, nik, nama, jekel, tempat_lahir, tgl_lahir, alamat, nomor_hp) VALUES ('$userakun_id', '$nik','$nama', '$jekel', '$tempatlahir', '$tanggallahir', '$alamat', '$nohp')";
		$proses2 = mysqli_query($conn, $sql2);

		if ($proses2){

			$_SESSION["flash"] = "sukses";
			$_SESSION["message"] = "Data Instruktur berhasil ditambahkan!";
			header("Location: ../main.php?page=input-instruktur");

		} else {

			$_SESSION["flash"] = "gagal";
			$_SESSION["message"] = "Telah terjadi kesalahan!";
			header("Location: ../main.php?page=input-instruktur");

		}

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=input-instruktur");

	}

?>