<?php
include '../koneksi.php';
$id 	= $_GET['id'];
$sql	= "DELETE FROM pesanan WHERE id ='$id'";

mysqli_query($koneksi, $sql);
header('location: index.php');