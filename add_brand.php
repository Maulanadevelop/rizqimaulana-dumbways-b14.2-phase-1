<?php $con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Brand</title>
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

<h1>Add Brand</h1>
<form action="" method="post">
	<input type="text" name="brand">
	<input class="beli" type="submit" name="submit" value="Add">
</form>

<?php
if (isset($_POST['brand'])) {
	
	$con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp');
	$query = mysqli_query($con, "INSERT INTO brand_tb (`name`) VALUES ('".$_POST['brand']."')");

	header('Location: index.php');
}
?>
</body>
</html>