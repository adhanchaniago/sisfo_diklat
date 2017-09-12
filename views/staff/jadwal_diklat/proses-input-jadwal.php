<?php

    session_start();

    $angkatan_id = $_POST["angkatan_id"];
    $mata_pelajaran_id = $_POST["mata_pelajaran_id"];
    $detail_instruktur_id = $_POST["detail_instruktur_id"];
    $hari = $_POST["hari"];
    $tgl = $_POST["tgl"];
    $waktu_mulai = $_POST["waktu_mulai"];
    $waktu_selesai = $_POST["waktu_selesai"];

    include "../../../config/koneksi.php";

    $sql = "
        INSERT INTO tb_jadwal_diklat (angkatan_id, mata_pelajaran_id, detail_instruktur_id, hari, tgl, waktu_mulai, waktu_selesai) 
        VALUES ('$angkatan_id', '$mata_pelajaran_id', '$detail_instruktur_id', '$hari', '$tgl', '$waktu_mulai', '$waktu_selesai')
    ";
    $proses = mysqli_query($conn, $sql);

    if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Jadwal Diklat berhasil ditambahkan!";
        header("Location: ../main.php?page=input-jadwal");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=input-jadwal");
    }

?>