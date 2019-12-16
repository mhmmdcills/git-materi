<?php
	include '../koneksi.php';
	$ID 		= $_POST['id'];
	$kategori	= $_POST['kategori'];
	$nama		= $_POST['nama'];
	$harga		= $_POST['harga'];
	$status		= $_POST['status'];

	$sql		= "UPDATE item SET category_id = '$kategori', name = '$nama', price = '$harga', status = '$status' WHERE id = '$ID'";

	mysqli_query($koneksi, $sql);
	header('location: index.php');