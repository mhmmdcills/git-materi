<?php
include '../koneksi.php';
$id 		= $_POST['id'];
$meja		= $_POST['meja'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];
$qms 		= $_POST['harga'];
$total		= $qty * $qms;

$sql		= "UPDATE pesanan SET table_number = '$meja', item_id = '$item', qty = '$qty', total = '$total' WHERE id = '$id'";

mysqli_query($koneksi, $sql);

header('location: index.php');