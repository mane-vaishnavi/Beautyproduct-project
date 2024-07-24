<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "shop_db") or die("connection failed");
$sql = "INSERT INTO contact_form(First_name, Last_name, Email, Mob_no) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/contactfrom.php");
mysqli_close($conn);
?>