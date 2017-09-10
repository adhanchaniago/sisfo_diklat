<?php 
$namadiklat=$_POST["namadiklat"];
$tglmasuk=$_POST["tgl_masuk"];
$tglselesai=$_POST["tgl_selesai"];


include "../../../config/koneksi.php";

$sql="INSERT INTO tb_angkatan (nama_diklat, tgl_masuk, tgl_selesai) VALUES ('$namadiklat', '$tglmasuk', '$tglselesai')";

$proses= mysqli_query($conn,$sql);


if ($proses){
		
		header("Location: input_angkatan_diklat.php");
	}

?>

