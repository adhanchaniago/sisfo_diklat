<?php 

	session_start();

	$id = $_POST["id"];
	$nama_diklat = $_POST["nama_diklat"];
	$tgl_mulai = $_POST["tgl_masuk"];
	$tgl_selesai = $_POST["tgl_selesai"];

	include "../../../config/koneksi.php";

	$sql = "UPDATE tb_angkatan SET nama_diklat = '$nama_diklat', tgl_masuk = '$tgl_mulai', tgl_selesai = '$tgl_selesai' WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Angkatan Diklat berhasil diubah!";
		header("Location: ../main.php?page=lihat-angkatan");
	} else {
		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-angkatan");
	}

?>