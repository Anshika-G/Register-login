<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'db.php';
session_start();

$password=$email=$message=$cc='';
if (isset($_POST['submit1']) && empty($_POST["cc"])) 
{
  $email = $mysqli->escape_string($_POST['email']);

  $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
 
  if ( $result->num_rows == 0 ) // User doesn't exist
  { 
      echo '<p style="color:red; font-weight:35px;">' ."Your email is not registered yet!" .'</p>';
  }
  else{//user exists
    $user = $result->fetch_assoc(); // $user becomes array with user data
    $email = $user['email'];
     //generate 6digit random code for confirmation
    $username = $user['username'];
    $a = rand(100000,999999);
    $_SESSION['random']=$a;
    
    //incase you dont have phpmailer application, uncomment the below line:28;
    echo 'Confirmation code = '.$a; 


    /*SENDING MAIL USING PHPMAILER APPLICATION*/
    require '/home/anshika/PHPMailer/src/Exception.php';
    require '/home/anshika/PHPMailer/src/PHPMailer.php';
    require '/home/anshika/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "user@gmail.com";
    // GMAIL password
    $mail->Password = "gmailPassword";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "587";
    $mail->From='sender@gmail.com';
    $mail->FromName='senderName';
    $mail->AddAddress($email, $username);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Confirmation Code'.$a.'';

    if($mail->Send())
    {
      echo '<p style="color:red;font-weight:25px;">' ."Please check your email and enter the confirmation code below!" .'</p>';
    }
    else
    {
      echo '<p style="color:red;font-weight:25px;">' ."Message not sent!" .'</p>'.$mail->ErrorInfo;
    }
    /*
    if($retval == true) {
     echo '<p style="color:red;font-weight:25px;">' ."Please check your email and enter the confirmation code below!" .'</p>';
    }
    else{
      echo '<p style="color:red;font-weight:25px;">' ."Message not sent!" .'</p>';
    }*/
  }
}
if(isset($_POST['submit1']) && !empty($_POST["cc"])){
  
  if ((!empty($_POST["cc"])) && ($_SESSION['random'] == $_POST["cc"])){
        $email = $_POST["email"];
        header("location:http://localhost/CollegeWebsite/success.php?email=$email");
      }
    else{
        echo '<p style="color:red;font-weight:25px;">' ."SORRY! The Confirmation Code didn't match.Try again!" .'</p>'; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
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

    <h1>Reset Your Password</h1>

    <form  method="post" action="">
     <div class="field-wrap">
      <input type="email" placeholder="Email" name="email" value="<?= $email ?>" id="un" required class="btn btn-block btn-default"> <br>

      <button class="button button-block btn-success" type="submit" name="submit1" value="submit1" style="margin-left: 27%;width: 45%;" />Reset</button>


      <input type="text" placeholder="confirmation code" name="cc" id="un" cc="email" class="btn btn-block btn-default"/>

      <br>
    </div>
    <button class="button button-block btn-success" type="submit" name="submit1" value="submit1" style="margin-left: 27%;width: 45%;" />confirm</button>
    </form>

  </div>
</body>

</html>
