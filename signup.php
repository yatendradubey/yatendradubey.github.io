<?php
include("connect.php");
$sql = "INSERT INTO signup (name, email, password,mobile_no)
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile_no]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	echo "<br />";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Refresh: 2; url=index.html");
mysqli_close($conn);
?>
