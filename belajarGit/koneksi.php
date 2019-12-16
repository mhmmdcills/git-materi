<?php

	$server = "localhost";
	$usr	= "root";
	$pass	= "1234";
	$dbname = "phpsql";

	$connect =mysqli_connect($server, $usr, $pass, $dbname);

	if (!$connect) {

		die(mysqli_connect_error()."koneksi gagal!");  
	}