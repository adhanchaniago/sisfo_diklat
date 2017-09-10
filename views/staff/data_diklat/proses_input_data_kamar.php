<?php 
$namaasrama=$_POST["namaasrama"];
$nomorkamar=$_POST["nomorkamar"];



include "../../../config/koneksi.php";

$sql="INSERT INTO tb_kamar (nama_asrama, nomor_kamar) VALUES ('$namaasrama', '$nomorkamar')";

$proses= mysqli_query($conn,$sql);


if ($proses){
		
		header("Location: input_data_kamar_peserta.php");
	}

?>

