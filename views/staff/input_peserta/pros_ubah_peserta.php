<?php 

	session_start();

	$angkatan_id = $_POST["angkatan_id"];
    $no_absen = $_POST["noabsen"];
	$nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jekel = $_POST["jekel"];
    $tmp_lahir = $_POST["tempatlahir"];
    $tgl_lahir = $_POST["tgllahir"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamatrumah"];
    $hp = $_POST["nomor_hp"];
    $cbg_asal = $_POST["cabangasal"];
    $cbg_alamat = $_POST["alamatkantor"];
    $cbg_telepon = $_POST["notelpkantor"];
    $kamar_id = $_POST["id_kamar"];

    include "../../../config/koneksi.php";

    $sql = "
        UPDATE tb_detail_peserta SET kamar_id = '$kamar_id', nomor_absen = '$no_absen', nama = '$nama', jekel = '$jekel', tempat_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', 
        agama = '$agama', alamat_rumah = '$alamat', nomor_hp = '$hp', cabang_asal = '$cbg_asal', alamat_kantor = '$cbg_alamat',
        tlp_kantor = '$cbg_telepon' 
        WHERE nik = '$nik'
    ";
    $proses = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($proses) {
        
        $_SESSION["flash"] = "sukses";
        $_SESSION["message"] = "Profil berhasil diperbaharui!";
        header("Location: ../main.php?page=lihat-peserta&id=".$angkatan_id);

    } else {

        $_SESSION["flash"] = "gagal";
        $_SESSION["message"] = "Telah terjadi kesalahan!";
        header("Location: ../main.php?page=lihat-peserta&id=".$angkatan_id);

    }

?>