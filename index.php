<?php $con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
$query1 = mysqli_query($con, "SELECT * FROM motorcycle_tb");
$count = mysqli_num_rows($query1);

foreach ($query1  as $key => $value) {
$query2 = mysqli_query($con, "SELECT * FROM brand_tb WHERE id = '".$value['brand_id']."'");
$fetch = mysqli_fetch_assoc($query2);
?>
<div class="box">
	<img src="<?= $value['image'] ?>" width="300" height="300">
	<h2><?= $fetch['name']." ".$value['name'] ?></h2>
<form action="detail.php" method="get">
	<input type="number" name="id" value="<?=$value['id']?>" hidden>
	<input class="beli" type="submit" value="Beli">
</form>
</div>
<?php } ?>

</body>
</html>