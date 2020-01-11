<?php
$con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp');
$brand = mysqli_query($con, "SELECT * FROM brand_tb");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
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

<h1>Add Product</h1>
<form action="" method="post" enctype="multipart/form-data">
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
			<label for="brand">Brand </label>
			</td>
			<td>
			<select name="brand" id="brand">
			<?php foreach ($brand as $key => $value) { ?>
				  <option value="<?=$value['id']?>"><?=$value['name']?></option>
			<?php } ?>
			</select><br>
			</td>
		</tr>
		<tr>
			<td>
			<label for="image">Image </label>
			</td>
			<td>
			<input type="file" name="image" id="image">
			</td>
		</tr>
		<tr>
			<td>
			<label for="color">Color </label>
			</td>
			<td>
			<input type="text" name="color" id="color"><br>
			</td>
		</tr>
		<tr>
			<td>
			<label for="spec">Specification </label>
			</td>
			<td>
			<textarea name="spec" id="spec"></textarea><br>
			</td>
		</tr>
		<tr>
			<td>
			<label for="stock">Stock </label>
			</td>
			<td>
			<input type="number" name="stock" id="stock"><br>
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

	$imageName = $_FILES['image']['name'];
	
	$query = mysqli_query($con, "INSERT INTO motorcycle_tb (`name`, `brand_id`, `image`, `Color`, `specification`, `stock`) VALUES ('".$_POST['name']."','".$_POST['brand']."','".$imageName."','".$_POST['color']."','".$_POST['spec']."','".$_POST['stock']."')");

	header('Location: index.php');
}
?>
</body>
</html>