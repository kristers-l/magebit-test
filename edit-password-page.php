<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="javascript.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Sign Up</title>
</head>
<body>
  <div class="container">
    <div class="content-box">

      <div class="content-box-text">
<div class="white-content-box">
<div class="white-content-box-info">
  <h2 class="white-content-box-head">Change password</h2>
  <hr class="white-content-line-box"></hr>
  <form action="edit-password.php" method="post" name="edit-name">
    <div class="input-container">
      <input type="password" name="password" placeholder="Password" required="required" class="input-field-box required">
      <i class="fa fa-lock input-icons"></i>
  </div>
  <input type="submit" class="submit-login" value="Change password" >
</form>
</div>
</div>
      </div>
    </div>
    <div class="copyright">All Rights Reserved “Magebit” 2016.</div>
  </div>

</body>
</html>
