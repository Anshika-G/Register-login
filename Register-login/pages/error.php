<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<form style="font-family: 'Raleway', sans-serif;">
    <h1 style="color: red;">Error!</h1>
    <p style="font-size: 35px;color: silver;">
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: logIn.php" );
    endif;
    ?>
    </p>     
    <button style="margin-left:45%;" class="button button-block btn-success"/><a href="logIn.php" style="color: white;">Home</a></button>
</form>
</body>
</html>
