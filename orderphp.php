<?php


/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ait";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

$name = $_POST['firstName'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$pizza = $_POST['pizza'];
$quantity = $_POST['quantity'];
$toppings = $_POST['toppings'];
$size= $_POST['size'];

settype($quantity, "integer"); 
	
$sql1= "select price from pizzas where name='$pizza'";	
$result = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));

$row = mysqli_fetch_array($result); 
$base_pay = $row[0]; 

$sql = "INSERT INTO `order` (`name`, `address`, `phone`, `pizza`, `quantity`,`toppings`,`size`) VALUES ('$name', '$address', '$phone','$pizza','$quantity','$toppings','$size')";
mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
echo $base_pay*$quantity;


?>