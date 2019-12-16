<?php
include '../koneksi.php';
$ID 	= $_POST['id'];
$nama	= $_POST['name'];

$sql	= "UPDATE category SET name = '$nama' WHERE id = '$ID'";

mysqli_query($koneksi, $sql);
header('location: index.php');