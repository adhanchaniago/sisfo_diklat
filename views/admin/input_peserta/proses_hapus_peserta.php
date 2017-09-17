<?php 

	session_start();

	$angkatan_id = $_POST["angkatan_id"];
	$id = $_POST["id"];
	$nik = $_POST["nik"];

	include "../../../config/koneksi.php";

	$sql = "DELETE FROM tb_nilai WHERE detail_peserta_id = '$id';";
	$sql .= "DELETE FROM tb_detail_peserta WHERE id = '$id';";
	$sql .= "DELETE FROM tb_user_akun WHERE username = '$nik';";
	$proses = mysqli_multi_query($conn, $sql);

	if ($proses) {

		$_SESSION["flash"] = "sukses";
		$_SESSION["message"] = "Data Peserta berhasil dihapus!";
		header("Location: ../main.php?page=lihat-peserta&id=".$angkatan_id);


	} else {

		$_SESSION["flash"] = "gagal";
		$_SESSION["message"] = "Telah terjadi kesalahan!";
		header("Location: ../main.php?page=lihat-peserta&id=".$angkatan_id);
		
	}

?>