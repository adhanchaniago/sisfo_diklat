<?php 

	session_start();

	$id = $_POST["id"];

	include "../../../config/koneksi.php";

	$sql = "DELETE FROM tb_nilai WHERE mata_pelajaran_id = '$id';";
	$sql .= "DELETE FROM tb_jadwal_diklat WHERE mata_pelajaran_id = '$id';";
	$sql .= "DELETE FROM tb_mata_pelajaran WHERE id = '$id';";
	$proses = mysqli_multi_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Mata Pelajaran berhasil dihapus!";
		header("Location: ../main.php?page=lihat-mapel");

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-mapel");
		
	}

?>