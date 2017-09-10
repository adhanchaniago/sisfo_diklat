<?php

    session_start();

    if ($_FILES["photo"]["name"] == "") {
        header("Location: ../main.php?page=home");
    }

    include "../../../config/koneksi.php";

    $nik = $_SESSION["username"];
    $target_dir = "../../../assets/img/photo-profil/";
    $target_file = $target_dir.basename($_FILES["photo"]["name"]);
    $upload_ok = 1;
    $img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $new_filename = "PRF-".$_SESSION["username"].".".$img_file_type;

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            $upload_ok = 1;
        } else {
            $_SESSION["flash"] = "gagal";
            $_SESSION["message"] = "File yang diinputkan bukan file gambar!";
            header("Location: ../main.php?page=home");
        }
    }

    if ($_FILES["photo"]["size"] > 2000000) {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "File yang diinputkan tidak boleh lebih besar dari 2MB!";
        header("Location: ../main.php?page=home");
    }

    if ($img_file_type != 'jpg' && $img_file_type != 'jpeg' && $img_file_type != png) {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "File yang diizinkan adalah dengan format JGP, JPEG, dan PNG!";
        header("Location: ../main.php?page=home");
    }

    $transfer = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir.$new_filename);

    if ($transfer) {
        $sql = "UPDATE tb_detail_peserta SET foto = '$new_filename' WHERE nik = '$nik'";
        $proses = mysqli_query($conn, $sql);
        
        if ($proses) {
            $_SESSION["flash"] = "sukses";
            $_SESSION["message"] = "Photo Profil berhasil di tambahkan!";
            header("Location: ../main.php?page=home");
        } else {
            $_SESSION["flash"] = "gagal";
            $_SESSION["message"] = "Telah terjadi kesalahan!";
            header("Location: ../main.php?page=home");
        }
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=home");
    }

?>