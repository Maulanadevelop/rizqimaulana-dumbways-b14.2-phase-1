<?php
	$con = mysqli_connect('localhost', 'root', 'root', 'dealer_motor_rmp');
	$query = mysqli_query($con, "SELECT * FROM motorcycle_tb WHERE id = '".$_GET['id']."'");
	$fetch = mysqli_fetch_assoc($query);
	settype($fetch['stock'] , "int");

	$banyak = $fetch['stock'] - $_GET['banyak'];

	$query = mysqli_query($con, "UPDATE motorcycle_tb SET stock = '".$banyak."' WHERE id = '".$_GET['id']."'");

	header('Location: index.php');
?>