<?php

    session_start();

    $nama_mapel = $_POST["namapelajaran"];

    include "../../../config/koneksi.php";

    $sql = "INSERT INTO tb_mata_pelajaran (nama_pelajaran) VALUES ('$nama_mapel')";
    $proses = mysqli_query($conn, $sql);
     
    if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Mata Pelajaran berhasil ditambahkan!";
        header("Location: ../main.php?page=input-mapel");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=input-mapel");
    }

?>