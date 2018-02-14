<?php include('start.php'); ?>
<?php 
require 'db.php';
?>
<!DOCTYPE html>
<html>
	<head>

		<title>LOGIN PAGE</title>
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

	<body style="font-family: 'Raleway', sans-serif;">
		<h1 style="color: green;"> INDIRA  GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN </h1>
		
		
		<div id="wrapper">
			<div class="container">

				<div class="success" style="color: blue; font-size: 35px; text-align: center; background-color: lime; margin: auto 15% " ><?= $success ?></div>
				<form id="form" method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
					<ul class="tab-group">
			        	<li class="tab"><a href="register.php">Sign Up</a></li>
			        	<li class="tab active"><a href="#login">Log In</a></li>
			        </ul>
      
					<fieldset>
				      <input placeholder="Username" type="text" id="un" name="username" value="<?= $username ?>" tabindex="1" autofocus class="btn btn-block btn-default" required=""><br><span class="error"><?= $username_error ?></span>
					  
				      <input placeholder="Password" type="password" id="password" name="password" tabindex="1" autofocus autocomplete="new-password" required class="btn btn-block btn-default" value="<?= $password ?>"><br>
				      <span class="error"><?= $password_error ?></span><br>
				      
				    </fieldset>

					<button type="submit" id="login" name="login" value="submit" class="btn btn-block btn-success" >Login</button>
				</form>
					
			</div>
			
		</div>
  </body>
</html>

