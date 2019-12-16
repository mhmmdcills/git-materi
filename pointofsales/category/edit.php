<!DOCTYPE html>
<html>
<head>
	<title>KATEGORI</title>
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
		$ID 	= $_GET['id'];
		$sql	= "SELECT * FROM category where id = '$ID'";
		$sumber	= mysqli_query($koneksi, $sql);
		$row	= mysqli_fetch_assoc($sumber);
		?>
		<form action="proses_edit.php" method="POST">
			<table>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $ID; ?>"></td>
				</tr>
				<tr>
					<td><label for="name">Nama </label></td>
					<td>:</td>
					<td><input type="text" name="name" id="name" size="30" value="<?php echo $row['name']; ?>"></td>
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