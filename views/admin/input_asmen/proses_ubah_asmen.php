<?php 

	session_start();

	$id = $_POST["id"];
	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$jekel = $_POST["jekel"];
	$tempatlahir = $_POST["tempatlahir"];
	$tanggallahir = $_POST["tanggallahir"];
	$alamat = $_POST["alamat"];
	$nohp = $_POST["nohp"];

	include "../../../config/koneksi.php";

	$sql = "UPDATE tb_detail_asmen SET nama = '$nama', jekel = '$jekel', tempat_lahir = '$tempatlahir', tgl_lahir = '$tanggallahir', alamat = '$alamat', nomor_hp = '$nohp' WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Asisten Manajer berhasil diubah!";
		header("Location: ../main.php?page=lihat-asmen");
	} else {
		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-asmen");
	}

?>