<!DOCTYPE html>
<html>
<head>
  <title>Reset Address</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="form">
     <h1><?= 'Reset your Password'?></h1>
    <form id="form" action="resetPass.php" method="POST">
        <fieldset>
           <input placeholder="New Password" type="password" id="un" name="password1" tabindex="1" autofocus class="btn btn-block btn-default" required=""><br>

          <input placeholder="Confirm your new password" type="password" id="un" name="password2" tabindex="1" autofocus required class="btn btn-block btn-default"><br>
          
          <!-- This input field is needed, to get the email of the user -->

          <input type="hidden" name="email" value="<?= $email ?>"> 

        </fieldset>

        <button type="submit" id="login" name="login" value="submit" class="btn btn-block btn-success">Reset</button>
    </form>
    
</div>
</body>
</html>
