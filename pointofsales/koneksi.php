<?php  
	include 'database.php';
	$server		= "localhost";
	$usr		= "phpmyadmin";
	$pass		= "123";
	$dbname		= "point_of_sale";

	$koneksi	= mysqli_connect($server, $usr, $pass, $dbname);

	$tab	= "CREATE TABLE category (
				id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				name VARCHAR(100) NOT NULL
	)";
	$mab	= "CREATE TABLE item (
				id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				category_id INT NOT NULL,
				name VARCHAR(100) NOT NULL,
				price INT NOT NULL,
				status BOOLEAN NOT NULL
	)";
	$cab	= "CREATE TABLE pesanan (
				id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				table_number VARCHAR(100) NOT NULL,
				item_id INT NOT NULL,
				qty INT NOT NULL,
				total INT NOT NULL
	)";

	if (!$koneksi) {
		die("CONNECTION failed".mysqli_connect_error());
	}

	mysqli_query($koneksi, $tab);
	mysqli_query($koneksi, $mab);
	mysqli_query($koneksi, $cab);
