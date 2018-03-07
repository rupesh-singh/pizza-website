<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ait";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}


if(isset($_POST["id"])) {
$sql = "SELECT id, name, crust, price, pic FROM pizzas WHERE id='".$_POST["id"]."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$dev_data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$dev_data = $rows;
}
echo json_encode($dev_data);
}

?>