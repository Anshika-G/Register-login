
<?php
require 'db.php';
session_start();
if(!isset($_GET['email']) && empty($_GET['email']))
{
  $_SESSION['message'] = "Not signed in!";
   header("location: error.php");
}

$password1='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // We get $_POST['email'] from the hidden input field of reset.php form
    $email = $mysqli->escape_string($_SESSION['email']);
    $address = $_POST['address'];
    $_SESSION['address'] = $address;
    $sql = "UPDATE users SET address='$address' WHERE email='$email'";

    if ($mysqli->query($sql) === TRUE) 
    {
       $_SESSION['success'] = "Address Updated!";
        header("location:index.php");    

    }
    else{
    echo "Address not updated!";
    }
}
?>