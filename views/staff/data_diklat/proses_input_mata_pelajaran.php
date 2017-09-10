<?php 
$namapelajaran=$_POST["namapelajaran"];



include "../../../config/koneksi.php";

$sql="INSERT INTO tb_mata_pelajaran (nama_pelajaran) VALUES ('$namapelajaran')";

$proses= mysqli_query($conn,$sql);


if ($proses){
		
		header("Location: input_mata_pelajaran.php");
	}

?>

