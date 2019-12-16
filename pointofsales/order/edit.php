<!DOCTYPE html>
<html>
<head>
	<title>Tambah Order</title>
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
		<?php
		include '../koneksi.php';
		$id 	= $_GET['id'];
		$snl	= "SELECT name, table_number, qty, total FROM pesanan JOIN item ON item.id = pesanan.item_id";
		$masdar	= mysqli_query($koneksi, $snl);
		$mor	= mysqli_fetch_assoc($masdar);

		$dds	= "SELECT * FROM item WHERE id = '$id'";
		$sumber	= mysqli_query($koneksi, $dds);		
		$as 	= mysqli_fetch_assoc($sumber);
		?>
		<form action="proses_edit.php" method="POST">
			<table>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
				</tr>
				<tr>
					<td><label for="meja">Table Number </label></td>
					<td>:</td>
					<td><input type="text" name="meja" id="meja" size="30" value="<?php echo $mor['table_number']?>"></td>
				</tr>
				<tr>
					<td>Item</td>
					<td>:</td>
					<td><select name="item">
						<option value=''>--<?php echo $mor['name']?>--</option>
						<?php
							include '../koneksi.php';
							$sxl	= "SELECT * FROM item WHERE status = 1";
							$sumber = mysqli_query($koneksi, $sxl);
							while ($row = mysqli_fetch_assoc($sumber)) {
								echo "
						<option value=".$row['id'].">".$row['name']."</option>
							";}
						?>
					</select></td>
				</tr>
				<tr>
					<td><label for="qty">Qty </label></td>
					<td>:</td>
					<td><input type="text" name="qty" id="qty" size="30" value="<?php echo $mor['qty']?>"></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="harga" value="<?php echo $as['price']?>">
					</td>
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