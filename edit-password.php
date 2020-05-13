<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript.js"></script>
</head>

<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['password'])) {
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con, $password);
      $id = $_SESSION['id'];
        // Check user is exist in the database
        $query    = "UPDATE `users` SET password='" . md5($password) . "' WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $_SESSION['password'] = $password;
        header("Location: dashboard.php");
    } else {
?>
<?php
    }
?>
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
