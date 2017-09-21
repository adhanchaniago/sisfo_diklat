<?php 

	session_start();

	$id = $_POST["id"];
	$angkatan_id = $_POST["angkatan_id"];

	include "../../../config/koneksi.php";

	$sql = "DELETE FROM tb_jadwal_diklat WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Kamar berhasil dihapus!";
		header("Location: ../main.php?page=lihat-jadwal&id=$angkatan_id");

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-jadwal&id=$angkatan_id");
		
	}

?>