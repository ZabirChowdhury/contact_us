<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["msg"];
$conn = mysqli_connect("localhost", "root", "", "contactus_form") or die("connection failed");
$sql = "INSERT INTO contact_table(First_name, Last_name, Email, Mobile, Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' , '{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/contactus_form%20/contact.php");
mysqli_close($conn);
?>