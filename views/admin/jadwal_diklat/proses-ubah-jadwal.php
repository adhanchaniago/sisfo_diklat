<?php 

	session_start();

	$id = $_POST["id"];
    $angkatan_id = $_POST["angkatan_id"];
    $mata_pelajaran_id = $_POST["mata_pelajaran_id"];
    $detail_instruktur_id = $_POST["detail_instruktur_id"];
    $hari = $_POST["hari"];
    $tgl = $_POST["tgl"];
    $waktu_mulai = $_POST["waktu_mulai"];
    $waktu_selesai = $_POST["waktu_selesai"];

    include "../../../config/koneksi.php";

    $sql = "
		UPDATE tb_jadwal_diklat SET angkatan_id = '$angkatan_id', mata_pelajaran_id = '$mata_pelajaran_id', detail_instruktur_id = '$detail_instruktur_id', hari = '$hari', tgl = '$tgl', waktu_mulai = '$waktu_mulai', waktu_selesai = '$waktu_selesai'
		WHERE id = '$id'
    ";
    $proses = mysqli_query($conn, $sql);

    if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Jadwal Diklat berhasil ditambahkan!";
        header("Location: ../main.php?page=lihat-jadwal&id=$angkatan_id");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=lihat-jadwal&id=$angkatan_id");
    }

?>