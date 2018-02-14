<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	echo "You must log in first";
  	header('location: logIn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logIn.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="font-family: 'Raleway', sans-serif;">

<div class="header" style="font-size: 60px;">
	<p style="color: rgba(19, 35, 47, 0.9)">Welcome to the home page</p>
</div>
<form >
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div" >
      	<h3 style="text-align: center;">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
       <p><strong style="color: #00C851;"><?php echo $_SESSION['username']; ?></strong></p>
      <img style= "margin-left: 38%;" src="profilePict.png" alt="ProfilePicture"><br>
      <p style="color: white;">Roll No: <?php echo $_SESSION['rollNo']; ?>
        <br>Email: <?php 
                    $email=$_SESSION['email'];
                   echo $_SESSION['email']; 
                   ?>
      <br>Address: <?php echo $_SESSION['address']; ?></p>

      <ul class="tab-group">
        <li class="tab" style="margin:0 33%;width: 70%;"><a href="editAddress.php">Edit Address</a></li><br><br>
        <li class="tab" style="margin:0 33%;width: 70%;"><a href="editPswrd.php">Edit Password</a></li>
      </ul>
    	<button class="btn-success" id="login" style="border-radius: 7px;height: 60px;"><a href="index.php?logout='1'" style="color: white;text-decoration: none;">logout<br></a> </button>
    <?php endif ?>
</form>
		
</body>
</html>
