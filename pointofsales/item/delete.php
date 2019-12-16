<?php
include '../koneksi.php';
$id 	= $_GET['id'];
$sql	= "DELETE FROM item WHERE id = '$id'";

mysqli_query($koneksi, $sql);
header('location: index.php');