<?php

    session_start();

    $password = $_POST["password"];
    $konfirmasi = $_POST["konfirmasi_password"];

    $new_password = md5($_POST["password"]);
    $username = $_SESSION["username"];

    include "../../../config/koneksi.php";

    if ($password != $konfirmasi) {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Konfirmasi Paassword yang diinputkan tidak cocok!";
        header("Location: ../main.php?page=ubah-password");
    }

    $sql = "UPDATE tb_user_akun SET password = '$new_password' WHERE username = '$username'";
    $proses = mysqli_query($conn, $sql);

    if ($proses) {
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Password berhasil dirubah!";
        header("Location: ../main.php?page=ubah-password");
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=ubah-password");
    }

?>