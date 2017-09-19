<?php 

	session_start();

	$id = $_POST["id"];
	$nik = $_POST["nik"];

	include "../../../config/koneksi.php";

	$sql = "DELETE FROM tb_materi WHERE detail_instruktur_id = '$id';";
	$sql .= "DELETE FROM tb_nilai WHERE detail_instruktur_id = '$id';";
	$sql .= "DELETE FROM tb_jadwal_diklat WHERE detail_instruktur_id = '$id';";
	$sql .= "DELETE FROM tb_detail_instruktur WHERE id = '$id';";
	$sql .= "DELETE FROM tb_user_akun WHERE username = '$nik';";
	$proses = mysqli_multi_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Instruktur berhasil dihapus!";
		header("Location: ../main.php?page=lihat-instruktur");

	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-instruktur");
		
	}

?>