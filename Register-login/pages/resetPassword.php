
<?php
require 'db.php';
session_start();
if(!isset($_GET['email']) && empty($_GET['email']))
{
  $_SESSION['message'] = "no email";
   header("location: error.php");
}

$password1='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['password1'] == $_POST['password2'] ) { 
        $password1 = $_POST['password1'];
        $spassword = md5($password1);
     
        // We get $_POST['email'] from the hidden input field of reset.php form
        $email = $mysqli->escape_string($_POST['email']);
        $sql = "UPDATE users SET password='$spassword' WHERE email='$email'";

        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        if ($mysqli->query($sql) === TRUE) {
            $user = $result->fetch_assoc();

            $_SESSION['username'] = $user['username'];  
            $_SESSION['rollNo'] = $user['rollNo'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['address'] = $user['address'];    

            $_SESSION['success'] = "You are now logged in";
            header("location:index.php");    

        }
        else{
            echo "Password not set!";
        }

    }
    else {
        echo '<p style="color:red;">' ."Two passwords you entered don't match, try again!".'</p>';   
    }
}
?>