<?php
include '../koneksi.php';
$kategori	= $_POST['kategori'];
$nama		= $_POST['nama'];
$harga		= $_POST['harga'];
$status		= $_POST['status'];

$sql		= "INSERT INTO item (category_id, name, price, status) VALUES ('$kategori','$nama','$harga','$status')";

mysqli_query($koneksi, $sql);
header('location: index.php');