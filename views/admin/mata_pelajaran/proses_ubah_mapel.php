<?php 

	session_start();

	$id = $_POST["id"];
	$nama_mapel = $_POST["namapelajaran"];

	include "../../../config/koneksi.php";

	$sql = "UPDATE tb_mata_pelajaran SET nama_pelajaran = '$nama_mapel' WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Mata Pelajaran berhasil diubah!";
		header("Location: ../main.php?page=lihat-mapel");
	} else {
		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-mapel");
	}

?>