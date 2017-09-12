<?php 

	session_start();

	$nama_asrama = $_POST["namaasrama"];
	$nomor_kamar = $_POST["nomorkamar"];

	include "../../../config/koneksi.php";

	$sql = "INSERT INTO tb_kamar (nama_asrama, nomor_kamar) VALUES ('$nama_asrama', '$nomor_kamar')";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
		$_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Data Kamar berhasil ditambahkan!";
        header("Location: ../main.php?page=input-kamar");
	} else {
		$_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=input-kamar");
	}

?>