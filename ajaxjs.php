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

if(isset($_POST['btn-save'])) {
$name = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['birthDate'];
$gender = $_POST['gender'];
$meal = $_POST['meal'];

$sql = "SELECT email FROM regiter WHERE Email='$email'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
if(!$row['Email']){
$sql = "INSERT INTO regiter(`Name`, `Email`, `Phone`, `Dob`, `Gender`,`meal`) VALUES ('$name', '$email', '$phone','$dob','$gender','$meal')";
mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
echo "registered";
} else {
echo "1";
}
}
?>