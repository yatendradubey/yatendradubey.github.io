<?php
$servername = "localhost";
$username = "root";
$password = "10YashU!";
$dbname = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return;
?>
