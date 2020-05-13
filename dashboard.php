<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript.js"></script>
</head>
<body>
  <div class="container">
    <div class="content-box">
      <div class="white-content-box">
      <div class="white-content-box-info">
        <div class="form-dashboard" id="form-dashboard">
            <h2>Hey, <?php  echo $_SESSION['username']; ?>!</h2>
            <p>Welcome to the dashboard.</p>
            <a href="edit-name-page.php"><input  type="submit" class="submit-login" value="Edit name" ></a>
            <a href="edit-password-page.php"><input  type="submit" class="submit-login" value="Edit password" ></a>
            <p><a href="logout.php">Logout</a></p>
        </div>
      </div>
      </div>

  </div>
  <div class="copyright">All Rights Reserved “Magebit” 2016.</div>
</div>
</body>
</html>
