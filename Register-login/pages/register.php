<?php include('start.php'); ?>
<!DOCTYPE html>
<html>
	<head>

		<title>REGISTRATION PAGE</title>
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
		<h1 style="color: green;">INDIRA  GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN </h1>
		
		<div id="wrapper">
			<div class="container">
				<div class="success" style="color: white; font-size: 35px; text-align: center; background-color: rgba(19, 35, 47, 0.9); margin: auto 15% " ><?= $success ?></div>
				<form id="form" method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
					
					<ul class="tab-group">
			        	<li class="tab active"><a href="#register">Sign Up</a></li>
			        	<li class="tab"><a href="logIn.php">Log In</a></li>
			        </ul>
      
					<fieldset>
				      <input placeholder="Username" type="text" id="un" name="username" value="<?= $username ?>" tabindex="1" autofocus class="btn btn-block btn-default" required=""><br><span class="error"><?= $username_error ?></span>
					  
				      <input type="email" placeholder="Email" name="email" id="un" name="email" required class="btn btn-block btn-default" value="<?= $email ?>" /><br>
				      <span class="error"><?= $email_error ?>

				      <input placeholder="Password" type="password" id="password" name="password" tabindex="1" autofocus autocomplete="new-password" required class="btn btn-block btn-default" value="<?= $password ?>"><br>
				      <span class="error"><?= $password_error ?></span>

				      <input placeholder="Roll No." tabindex="4" id="un" name="rollNo" required class="btn btn-block btn-default" value="<?= $rollNo ?>"/><br><span class="error"><?= $rollNo_error ?></span>
				      
				      
				      <textarea placeholder="Address" type="text" id="un" name="address" tabindex="5" required class="btn btn-block btn-default" value="<?= $address ?>"></textarea>
				      <span class="error"><?= $address_error ?></span>

				    </fieldset>

					<button type="submit" id="login" name="register" value="submit" class="btn btn-block btn-success">Register</button>


				</form>
					
			</div>
			
		</div>
  </body>
</html>

