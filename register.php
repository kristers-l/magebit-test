<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $select = mysqli_query($con, "SELECT * FROM `users` WHERE email= '".$_POST['email']."'") or exit(mysqli_error($connectionID));
        if(mysqli_num_rows($select)) {
        exit("  <div class='container'>
          <div class='content-box'>
          <div class='white-content-box'>
            <div class='white-content-box-info'>
              <div class='form-dashboard' id='form-dashboard'>
              <h3>Email has been already used.</h3><br/>
              <p class='link'>Click here to <a href='index.php'>register</a> again.</p>
              </div>
            </div>
            </div>
          </div>
        </div>");
}
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
          $_SESSION['username'] = $username;

          // Redirect to user dashboard page
          header("Location: dashboard.php");
        } else {
            echo "<div class='container'>
              <div class='content-box'>
              <div id='form-dashboard'>
                    <h3>Fill all the fields.</h3><br/>
                    <p class='link'>Click here to <a href='index.php'>register</a> again.</p>
                    </div>
              </div>
            </div>";
        }
    } else {
?>
<?php
    }
?>
