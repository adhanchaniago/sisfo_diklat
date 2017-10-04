<?php 

	print_r($_POST);
	session_start();

	$angkatan_id = $_POST["angkatan_id"];
	$mata_pelajaran_id = $_POST["mata_pelajaran_id"];
	$detail_instruktur_id = $_POST["detail_instruktur_id"];
	$detail_peserta_id = $_POST["detail_peserta_id"];
	$nilai = $_POST["nilai"];

	include "../../../config/koneksi.php";

	$sql = "UPDATE tb_nilai SET nilai = '$nilai' WHERE angkatan_id = '$angkatan_id' AND mata_pelajaran_id = '$mata_pelajaran_id' AND detail_instruktur_id = '$detail_instruktur_id' AND detail_peserta_id = '$detail_peserta_id'";
	$proses = mysqli_query($conn, $sql);

	if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Nilai berhasil diubah!";
        header("Location: ../main.php?page=lihat-nilai&id=$angkatan_id");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=lihat-nilai&id=$angkatan_id");
    }

?>