<?php $con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<style type="text/css">
		body{
			margin: 30px;
		}
		.box{
			font-family: verdana;
			display: inline-block;
			margin: 0px 10px;
		}
		.nav{
			margin-left: 5px;
			margin-top: 20px;
			float: right;
			font-family: sans-serif;
			text-decoration: none;
			color: white;
			background-color: lightgreen;
			padding: 5px;
			border-radius: 3px;
		}
		.beli{
			text-decoration: none;
			border: none;
			color: white;
			background-color: blue;
			padding: 5px 10px;
			border-radius: 3px;
		}
		.desc{
			font-family: sans-serif;
		}
	</style>
</head>
<body>

<h1 style="display: inline-block;">RMP MOTORCYCLE</h1>
<a class="nav" href="add_customer.php">Add Customer</a>
<a class="nav" href="add_product.php">Add Product</a>
<a class="nav" href="add_brand.php">Add Brand</a>
<br>
<br>
<?php
$query = mysqli_query($con, "SELECT * FROM motorcycle_tb WHERE id = '".$_GET['id']."'");
$fetch = mysqli_fetch_assoc($query);
?>

<div class="box">
	<img src="<?= $fetch['image'] ?>" width="300" height="300">
	<h2><?= $fetch['name'] ?></h2>
	<div class="desc">
		<p><?=$fetch["specification"]?></p>
		<p>Color = <?=$fetch["Color"]?></p>
		<p>Stock = <?=$fetch["stock"]?></p>
	</div>
	<form action="beli.php">
		<input type="number" name="id" value="<?=$fetch["id"]?>" hidden>
		<input type="number" name="banyak" value="1">
		<input nama="beli" class="beli" type="submit" value="Beli">
	</form>
</div>

</body>
</html>