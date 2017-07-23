<?php
include("connect.php");
$sql = "INSERT INTO signup (name, email, password)
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Refresh: 2; url=index.html");
mysqli_close($conn);
?>
