<?php
$servername = "localhost";
$username = "root";
$password = "10YashU!";
$dbname = "shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#else {
#	echo "connection successfull";
#}
return;
?>
