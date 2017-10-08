<?php 

	session_start();

	$angkatan_id = $_POST["angkatan_id"];
	$nomor_absen = $_POST["nomor_absen"];
	$nik = $_POST["nik"];  
	$nama = $_POST["nama"];
	$kamar_id = $_POST["kamar_id"];
	$password = md5($_POST["nik"]);

	include "../../../config/koneksi.php";

	$x_sql = "SELECT * FROM tb_detail_peserta WHERE kamar_id = '$kamar_id' AND angkatan_id = '$angkatan_id'";
	$x_proses = mysqli_query($conn, $x_sql);
	$x_data = mysqli_num_rows($x_proses);
	
	if ($x_data >= 2) {
		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Kamar Penuh!";
		header("Location: ../main.php?page=input-peserta&id=$angkatan_id");
		die();
	}

	// die();

	$sql = "INSERT INTO tb_user_akun (username, password, hak_akses, status) VALUES ('$nik','$password','peserta','1')";
	$proses = mysqli_query($conn,$sql);
	$userakun_id = mysqli_insert_id($conn);

	if ($proses){

		$sql2 = "INSERT INTO tb_detail_peserta (user_akun_id, angkatan_id, nomor_absen, nik, nama, kamar_id) VALUES ('$userakun_id', '$angkatan_id', '$nomor_absen', '$nik', '$nama', '$kamar_id')";
		$proses2 = mysqli_query($conn, $sql2);

		if ($proses2){
			
			$_SESSION["flash"] = "sukses";
			$_SESSION["message"] = "Data Peserta berhasil ditambahkan!";
			header("Location: ../main.php?page=input-peserta&id=$angkatan_id");

		} else {

			$_SESSION["flash"] = "gagal";
			$_SESSION["message"] = "Telah terjadi kesalahan!";
			header("Location: ../main.php?page=input-peserta&id=$angkatan_id");

		}

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=input-peserta&id=$angkatan_id");

	}

?>