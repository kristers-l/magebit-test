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
    if (isset($_POST['username'])) {
      $username = stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($con, $username);
      $id = $_SESSION['id'];
        // Check user is exist in the database
        $query    = "UPDATE `users` SET username='$username' WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
?>
<?php
    }
?>
