
<?php
require 'db.php';
session_start();
if(!isset($_GET['email']) && empty($_GET['email']))
{
  $_SESSION['message'] = "Not signed in!";
   header("location: error.php");
}

$password1='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['password1'] == $_POST['password2'] ) { 
        $password1 = $_POST['password1'];
        $spassword = md5($password1);
     
        // We get $_POST['email'] from the hidden input field of reset.php form
        $email = $mysqli->escape_string($_SESSION['email']);
        $sql = "UPDATE users SET password='$spassword' WHERE email='$email'";

        if ($mysqli->query($sql) === TRUE) {
            $_SESSION['success'] = "Password Updated!";
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
