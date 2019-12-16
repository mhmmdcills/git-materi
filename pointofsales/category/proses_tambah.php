<?php
include '../koneksi.php';
$nama	= $_POST['nama'];

$sql	= "INSERT INTO category (name) VALUES ('$nama')";

mysqli_query($koneksi, $sql);
header('location: index.php');