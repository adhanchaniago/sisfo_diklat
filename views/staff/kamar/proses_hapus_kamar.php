<?php 

	session_start();

	$id = $_POST["id"];

	include "../../../config/koneksi.php";

	$sql .= "DELETE FROM tB_kamar WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Kamar berhasil dihapus!";
		header("Location: ../main.php?page=lihat-kamar");

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-kamar");
		
	}

?>