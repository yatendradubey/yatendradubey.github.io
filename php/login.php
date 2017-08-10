<?php
include("connect.php");


$sql="SELECT `username`,`password` FROM `signup`
		WHERE (`username`='$_POST[username]' AND `password`='$_POST[password]')";


if($result=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($result) !=0){
	#if($row=mysqli_fetch_array($result)){
	session_start();
	echo "Logged in successfully";
	echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
	#header("Refresh: 2; url=html/login.html");
	}
	else{
		echo "Incorrect email and password..<br />Please enter correct Details..<br />Redirecting to Login page";
		header("Refresh: 2; url=html/login.html");
	}
}


mysqli_close($conn);
?>
