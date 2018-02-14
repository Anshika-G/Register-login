<?php
require 'db.php';

// Check connection
if ($mysqli->connect_error) {
    die("mysqliection failed: " . $mysqli->connect_error);
} 

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$rollNo=$_POST['rollNo'];
$address=$_POST['address'];
$password=md5($password);

$result = "INSERT INTO users(username, email, password, rollNo, address) VALUES ('$username', '$email', '$password', '$rollNo', '$address')";

if ($mysqli->query($result) === TRUE) {
	$username = $email = $password = $rollNo = $address = '';
} else {
	$username = $email = $password = $rollNo = $address = '';
	$success='Error: user with same mail already exists!';
}

$mysqli->close();
?>



