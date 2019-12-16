<!DOCTYPE html>
<html>
<head>
	<title>Tambah Item</title>
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
			border: 1px solid;
			font-size: 20px;
			padding-top: 20px;
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
		<form action="proses_tambah.php" method="POST">
			<table>
				<tr>
					<td>Kategori</td>
					<td>:</td>
					<td><select name="kategori">
						<option value=''>--PILIH KATEGORI--</option>
						<?php
							include '../koneksi.php';
							$sxl	= "SELECT * FROM category";
							$sumber = mysqli_query($koneksi, $sxl);
							while ($row = mysqli_fetch_assoc($sumber)) {
								echo "
						<option value=".$row['id'].">".$row['name']."</option>
							";}
						?>
					</select></td>
				</tr>
				<tr>
					<td><label for="name">Nama </label></td>
					<td>:</td>
					<td><input type="text" name="nama" id="name" size="30"></td>
				</tr>
				<tr>
					<td><label for="harga">Price </label></td>
					<td>:</td>
					<td><input type="text" name="harga" id="harga" size="30"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td><input type="radio" name="status" value=1 id="aktif">
					<label for="aktif">Aktif</label>
					<input type="radio" name="status" value=0 id="tidak"><label for="tidak">Tidak Aktif</label></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>		

	</div>
</body>
</html>