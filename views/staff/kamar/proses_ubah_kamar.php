<?php 

	session_start();

	$id = $_POST["id"];
	$nama_asrama = $_POST["namaasrama"];
	$nomor_kamar = $_POST["nomorkamar"];

	include "../../../config/koneksi.php";

	$sql = "UPDATE tb_kamar SET nama_asrama = '$nama_asrama', nomor_kamar = '$nomor_kamar' WHERE id = '$id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Data Kamar berhasil diubah!";
        header("Location: ../main.php?page=lihat-kamar");
	} else {
		$_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=lihat-kamar");
	}

?>