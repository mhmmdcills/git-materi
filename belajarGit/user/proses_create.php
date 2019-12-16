<?php
include '../koneksi.php';
$name  	 	= $_POST['name'];
$email  	= $_POST['email'];
$password   = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
mysqli_query($connect, $sql);
header('location: index.php');
?>