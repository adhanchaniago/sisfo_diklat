<?php
$x_servername ="localhost";
$x_username ="root";
$x_password ="";
$x_database = "diklat";

$conn = mysqli_connect($x_servername, $x_username, $x_password, $x_database);
if (!$conn) {

	die ("Connection failed :". mysql_connect_error());
}

?>