<?php
include("connect.php");

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sex=$_POST['gender'];
$dob=$_POST['dob'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$tel=$_POST['tel'];



$sql="INSERT INTO `signup` (`ID`, `fname`, `lname`,`gender`,`Date of Birth`, `username`, `password`,`Mobile No`)
 		VALUES (NULL, '$fname', '$lname','$sex','$dob', '$uname', '$pass', $tel)";
if (mysqli_query($conn, $sql)) {
    echo "Please Wait!!";
	header("Refresh: 2; url=../html/login.html");
} else {
    echo "Please Enter All the Fields <br /> Redirecting to signup page";
	header("Refresh: 3; url=../html/signup.html");
}

mysqli_close($conn);
?>
