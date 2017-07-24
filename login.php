<?php
include("connect.php");

$sql="SELECT email,password FROM signup WHERE (email='$_POST[email]' AND password='$_POST[password]')";

if($result=mysqli_query($conn,$sql)){
	if($row=mysqli_fetch_array($result)){
	echo "Logged in successfully";
	header("Refresh: 2; url=html/login.html");
	}
	else{
		echo "Incorrect email and password..<br />Please enter correct Details..<br />Redirecting to Login page";
		header("Refresh: 2; url=html/login.html");
	}
}


mysqli_close($conn);
?>
