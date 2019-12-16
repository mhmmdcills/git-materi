<?php
include '../koneksi.php';
$meja		= $_POST['meja'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];

$skl		= "SELECT price FROM item WHERE id = '$item'";
$mkl		= mysqli_query($koneksi, $skl);
if (mysqli_num_rows($mkl)>0) {
while ($lom	= mysqli_fetch_assoc($mkl)) {
	$a = $lom['price'];
	echo $a;
	}
}

$total		= $qty*$a;

$sql		= "INSERT INTO pesanan (table_number, item_id, qty, total) VALUES ('$meja', '$item', '$qty', '$total')";

mysqli_query($koneksi, $sql);

header('location: index.php');