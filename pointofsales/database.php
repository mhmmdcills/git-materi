<?php  
	$server		= "localhost";
	$usr		= "phpmyadmin";
	$pass		= "123";

	$koneksi	= mysqli_connect($server, $usr, $pass);

	$db		= "CREATE DATABASE point_of_sale";

	if (!$koneksi) {
		die("CONNECTION failed".mysqli_connect_error());
	}

	mysqli_query($koneksi, $db);