<?php

	session_start();

	if ($_FILES["file_materi"]["name"] == "") {
        header("Location: ../main.php?page=input-materi");
    }

    include "../../../config/koneksi.php";

	$judul_materi = $_POST["judul_materi"];
	$detail_instruktur_id = $_SESSION["id"];

	$target_dir = "../../../assets/file/";
	$target_file = $target_dir.basename($_FILES["file_materi"]["name"]);
    $upload_ok = 1;
    $img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $new_filename = "MATERI-".$_SESSION["username"]."-".rand('11111', '99999')."-".date("Ymd").".".$img_file_type;

    if ($_FILES["file_materi"]["size"] > 2000000) {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "File yang diinputkan tidak boleh lebih besar dari 2MB!";
        header("Location: ../main.php?page=input-materi");
    }

    $transfer = move_uploaded_file($_FILES["file_materi"]["tmp_name"], $target_dir.$new_filename);

    if ($transfer) {
        $sql = "
			INSERT INTO tb_materi (detail_instruktur_id, judul_materi, lokasi) 
			VALUES ('$detail_instruktur_id', '$judul_materi', '$new_filename')
        ";
        $proses = mysqli_query($conn, $sql);
        
        if ($proses) {
            $_SESSION["flash"] = "sukses";
            $_SESSION["message"] = "Materi berhasil di tambahkan!";
            header("Location: ../main.php?page=input-materi");
        } else {
            $_SESSION["flash"] = "gagal";
            $_SESSION["message"] = "Telah terjadi kesalahan!";
            header("Location: ../main.php?page=input-materi");
        }
    } else {
        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=input-materi");
    }
?>