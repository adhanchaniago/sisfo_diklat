<?php 

	session_start();

	$id = $_POST["id"];

	include "../../../config/koneksi.php";

	$sql = "DELETE FROM tb_nilai WHERE angkatan_id = '$id';";
	$sql .= "DELETE FROM tb_jadwal_diklat WHERE angkatan_id = '$id';";
	$sql .= "DELETE FROM tb_detail_peserta WHERE angkatan_id = '$id';";
	$sql .= "DELETE FROM tb_angkatan WHERE id = '$id';";
	$proses = mysqli_multi_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Angkatan Diklat berhasil dihapus!";
		header("Location: ../main.php?page=lihat-angkatan");

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-angkatan");
		
	}

?>