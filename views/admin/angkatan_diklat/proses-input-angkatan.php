<?php

    session_start();

    $nama_diklat = $_POST["nama_diklat"];
    $tgl_masuk = $_POST["tgl_masuk"];
    $tgl_selesai = $_POST["tgl_selesai"];

    include "../../../config/koneksi.php";

    $sql = "INSERT INTO tb_angkatan (nama_diklat, tgl_masuk, tgl_selesai) VALUES ('$nama_diklat', '$tgl_masuk', '$tgl_selesai')";
    $proses = mysqli_query($conn, $sql);

    if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Angkatan Diklat berhasil ditambahkan!";
        header("Location: ../main.php?page=input-angkatan");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=input-angkatan");
    }

?>