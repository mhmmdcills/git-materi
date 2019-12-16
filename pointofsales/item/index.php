<!DOCTYPE html>
<html>
<head>
	<title>ITEM</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">

		#side{
			border:1px solid;
			width: 200px;
			height: 300px;
			float: left;
			margin: 0px 20px;
		}
		#side h1{
			text-align: left;
			padding-left: 10px;
			text-transform: uppercase;
			font-size: 28px;
			font-weight: bold;
		}
		#side ul{
			text-align: left;
			padding: 10px;
			text-transform: uppercase;
			font-size: 22px;
		}
		#side li{
			padding: 10px 0px;
			text-align: left;
			text-transform: uppercase;
			list-style: none;
		}
		#side li a{
			color: #000;
			font-size: 20px;
			text-decoration: none;
		}
		#side li a:hover{
			text-decoration: underline;
		}
		
		#main{
			margin: 0px 20px;
		}
		#main table td{
			font-size: 20px;
		}
		.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
		}
	</style>
</head>
<body>
	<div id="side" class="clearfix">
		<ul>
		<li><a href="../category/index.php">category</a></li>
		<li><a href="../item/index.php">item</a></li>
		<li><a href="../order/index.php">order</a></li>
		</ul>
	</div>
		
	<div id="main" class="clearfix">
		<a href="tambah.php">Masukkan Data</a>
		<table border="1" cellpadding="10" class="clearfix">
			<tr>
				<td>Nomor</td>
				<td>Kategori</td>
				<td>Nama</td>
				<td>Price</td>
				<td>Status</td>
				<td>Aksi</td>
				</tr>
				<?php
				include '../koneksi.php';
				$nomor 	= 1;
				$sql	= "SELECT 
				category.name as nama_kategori,
				item.id as id,
				item.name as nama_item,
				item.price as price,
				item.status as status
				FROM category
				JOIN item 
				ON category.id = item.category_id";
				$sumber	= mysqli_query($koneksi, $sql);
				function harga($n){
					$rupiah = "Rp ".number_format($n,0,',','.');
					return $rupiah;
				};
				function jika($m){
						if ($m == 1){
							return "Aktif";
						}
						else {
							return "Tidak Aktif";
						}
					};
				if (mysqli_num_rows($sumber)>0) {
					while ($row = mysqli_fetch_assoc($sumber)) {
						echo "
							<tr>
							<td>".$nomor++."</td>
							<td>".$row['nama_kategori']."</td>
							<td>".$row['nama_item']."</td>
							<td>".harga($row['price'])."</td>
							<td>".jika($row['status'])."</td>
							<td>
								<a href='edit.php?id=".$row['id']."'>Edit</a>
								<a href='delete.php?id=".$row['id']."'onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>	
						";
					}
				}
				?>
		</table>
	</div>		

	</div>
</body>
</html>