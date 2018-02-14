<?php 
// define variables and set to empty values
require 'db.php';
session_start();
$username_error = $email_error = $password_error = $rollNo_error = $address_error = $error = "";
$username = $email = $password = $rollNo = $success = $address = "";

//form is submitted with POST method
if (isset($_POST['register'])) {
  if (empty($_POST["username"])) {
    $username_error = "username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["rollNo"])) {
    $rollNo_error = "Roll No is required";
  } else {
    if(is_numeric($_POST["rollNo"])) {
      $rollNo = test_input($_POST["rollNo"]);
    }
    else
    $rollNo_error = "Integers required in the roll no. field!";
  }

  if (empty($_POST["password"])) {
    $password_error = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }

  if (empty($_POST["address"])) {
    $address_error = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if ($username_error == '' and $email_error == '' and $password_error == '' and $rollNo_error == '' and $address_error == '' ){
      $message_body = '';
      //unset($_POST['submit']); 
      $success = "Registered successfully!";
      $username = $email = $password = $rollNo = $address = '';
      include('valid.php');

  }
}

if (isset($_POST['login'])) {
  if (empty($_POST["username"])) {
    $username_error = "username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["password"])) {
    $password_error = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  if ($username_error == '' and $password_error == ''){
    $password1 = md5($_POST['password']);

    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");

    if ( $result->num_rows == 0 ){ // User doesn't exist
      echo '<p style="color:red; font-weight:35px;">' ."User with this username doesn't exist!" .'</p>';
    }
    else{
      $user = $result->fetch_assoc();
       if ($password1 == $user['password']) {
       $_SESSION['username'] = $user['username'];  
       $_SESSION['rollNo'] = $user['rollNo'];
       $_SESSION['address'] = $user['address'];    
        $_SESSION['email'] = $user['email'];      
       $_SESSION['success'] = "You are now logged in";
        header("location: index.php");
      }
      else{
        echo "You have entered wrong Password!";
        header('location: incorrect.php');
      }
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}