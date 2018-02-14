<?php
/* Password reset process, updates database with new user password */
require 'db.php';
session_start();

if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $mysqli->escape_string($_GET['email']); 

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 )         
    { 
        $_SESSION['message'] = "Error Occured!";
    }
}
else {
    $_SESSION['message'] = "no email";
   header("location: error.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset your password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="form">
     <h1><?= 'Reset your password'?></h1>
    <form id="form" action="resetPassword.php" method="POST">
        <fieldset>
           <input placeholder="New Password" type="password" id="un" name="password1" tabindex="1" autofocus class="btn btn-block btn-default" required=""><br>

          <input placeholder="type the new password again" type="password" id="un" name="password2" tabindex="1" autofocus required class="btn btn-block btn-default"><br>
          
          <!-- This input field is needed, to get the email of the user -->

          <input type="hidden" name="email" value="<?= $email ?>"> 

        </fieldset>

        <button type="submit" id="login" name="login" value="submit" class="btn btn-block btn-success">Login</button>
    </form>
    
</div>
</body>
</html>
