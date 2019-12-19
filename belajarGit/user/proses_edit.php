<?php
include '../koneksi.php';
$ID    		= $_POST['id'];
$name   	= $_POST['name'];
$email  	= $_POST['email'];



$sql    	= "SELECT * FROM users where id ='$ID'";
$result 	= mysqli_query($connect, $sql);
$row    	= mysqli_fetch_row($result);
$passwordu 	= $row[3]; //resultpassworddaritabeluser


if(empty($_POST['password'])){
	$password = $passwordu;
}else {
	$password =md5($_POST['password']);
}

$sql = "UPDATE users 
	SET name = '$name', 
	email = '$email', 
	password = '$password' 
	WHERE id = '$ID'";

mysqli_query($connect,$sql);
header('location:index.php');
?>