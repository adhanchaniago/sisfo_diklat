<?php

	session_start();

	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$jekel = $_POST["jekel"];
	$tmp_lahir = $_POST["tempatlahir"];
	$tgl_lahir = $_POST["tanggallahir"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["nohp"];

	include "../../../config/koneksi.php";

	$sql = "
		UPDATE tb_detail_asmen SET nama = '$nama', jekel = '$jekel', tempat_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', 
		alamat = '$alamat', nomor_hp = '$telepon' WHERE nik = '$nik'
	";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Profil berhasil dirubah!";
		header("Location: ../main.php?page=edit-profil");
	} else {
		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=edit-profil");
	}
 
?>