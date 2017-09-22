<?php 

	session_start();
	
	$angkatan_id = $_POST["angkatan_id"];
	$detail_instruktur_id = $_POST["detail_instruktur_id"];
	$mata_pelajaran_id = $_POST["mata_pelajaran_id"];

	$peserta_count = count($_POST["peserta_id"]);

	include "../../../config/koneksi.php";
	
	if ($peserta_count > 0) {
		
		for ($i=0; $i < $peserta_count ; $i++) { 
			
			$detail_peserta_id = $_POST["peserta_id"][$i];
			$nilai = $_POST["nilai"][$i];

			$sql = "
				INSERT INTO tb_nilai (angkatan_id, mata_pelajaran_id, detail_peserta_id, detail_instruktur_id, nilai) 
				VALUES ('$angkatan_id', '$mata_pelajaran_id', '$detail_peserta_id', '$detail_instruktur_id', '$nilai')
			";

			$proses = mysqli_query($conn, $sql);

			if (!$proses) {
				$_SESSION["flash"] = "gagal";
		        $_SESSION["message"] = "Telah terjadi kesalahan!";
		        header("Location: ../main.php?page=home");
			}

		}

	}

	$_SESSION["flash"] = "sukses";
    $_SESSION["message"] = "Nilai berhasil ditambahkan!";
    header("Location: ../main.php?page=home");

?>