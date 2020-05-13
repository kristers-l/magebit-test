<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="javascript.js"></script>
  <title>Login/Sign Up</title>
</head>
<body>
  <div class="container">
    <div class="content-box">

      <div class="content-box-text">
        <div class="login-box" id="animate">
          <div class="login-box-info" id="box1">
            <h2 class="login-box-head">Login</h2>
            <img class="login-box-logo" src="img/logo.png">
            <hr class="login-line-box"></hr>
            <form action="login.php" method="post" name="login" id="login">
              <div class="input-container">
                <input type="email" name="email" placeholder="Email" required="required" class="input-field-box required">
                <i class="fa fa-envelope input-icons"></i>
              </div>
              <div class="input-container">
                <input type="password"  name="password" placeholder="Password"  required="required"  class="input-field-box">
                <i class="fa fa-lock input-icons" style="font-size: 19px;"></i>
              </div>
              <input type="submit" class="submit-login" name="login" value="Login" ><div class="input-box-forgot">Forgot?</div>
</form>

</div>

<div class="signup-box-info" id="box2">

  <h2 class="login-box-head">Sign Up</h2>
  <img class="login-box-logo" src="img/logo.png">
  <hr class="login-line-box"></hr>
  <form action="register.php" method="post" name="sign-up">
    <div class="input-container">
      <input type="text"  name="username" placeholder="Full Name" required="required" class="input-field-box required">
      <i class="fa fa-user input-icons"></i>
  </div>
  <div class="input-container">
  <input type="email" name="email" placeholder="Email"  required="required"  class="input-field-box">
  <i class="fa fa-envelope input-icons" style="font-size: 19px;"></i>
    </div>
    <div class="input-container">
    <input type="password"  name="password" placeholder="Password"  required="required"  class="input-field-box">
    <i class="fa fa-lock input-icons" style="font-size: 19px;"></i>
      </div>

  <input type="submit" class="submit-login" name="sign-up"value="Sign Up" >
</form>

</div>
</div>
<div class="content-box-signup" id="content-box1"><h2 class="login-header-text">Don’t have an account?</h2>
<div><hr class="login-line"></hr></div>
<div class="login-main-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<button class="btn-blue signup desktop" onclick="signupbox(animate)" id="box-toggle1">Sign Up</button>
<button class="btn-blue signup mobile" id="box-toggle1">Sign Up</button></div>
<div class="content-box-login" id="content-box2"><h2 class="login-header-text">Have an account?</h2>
<div><hr class="login-line"></hr></div>
<div class="login-main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
<button class="btn-blue login desktop" onclick="loginbox(animate)" id="box-toggle2">Login</button>
<button class="btn-blue login mobile"  id="box-toggle2">Login</button></div>



      </div>
    </div>
    <div class="copyright">All Rights Reserved “Magebit” 2016.</div>
  </div>

</body>
</html>
