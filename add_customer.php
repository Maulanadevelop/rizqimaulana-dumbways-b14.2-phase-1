<?php $con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
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

<h1>Add Customer</h1>
<form action="" method="post">
	<table>
		<tr>
			<td>
			<label for="name">Name </label>
			</td>
			<td>
			<input type="text" name="name" id="name"><br>
			</td>
		</tr>
		<tr>
			<td>
			<label for="address">Address </label>
			</td>
			<td>
			<input type="text" name="address" id="address"><br>
			</td>
		</tr>
		<tr>
			<td>
			<label for="phone">Phone </label>
			</td>
			<td>
			<input type="text" name="phone" id="phone">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input class="beli" type="submit" name="submit" value="Add">
			</td>
		</tr>
	</table>
</form>

<?php
if (isset($_POST['submit'])) {
	
	$query = mysqli_query($con, "INSERT INTO customer_tb (`name`, `address`, `phone`) VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."')");

	header('Location: index.php');
}
?>
</body>
</html>