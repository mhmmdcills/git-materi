<?php  
	$server		= "localhost";
	$usr		= "phpmyadmin";
	$pass		= "123";
	$dbname		= "point_of_sale";

	$koneksi	= mysqli_connect($server, $usr, $pass, $dbname);

	if (!$koneksi) {
		die("CONNECTION failed".mysqli_connect_error());
	}

?>