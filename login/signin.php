<?php
 session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.styles.css">
    <title>Registration</title>
</head>
<body>
    
<div class="center">
      <h1>Log In</h1>
      <form action="includes/login.inc.php" method="post">
        <div class="txt_field">
          <input type="text"
          autocomplete="off" 
          placeholder="Enter your username"   
           name="username">
          <span></span>
        
        </div>
        <div class="txt_field">
          <input type="password"
          placeholder="Enter your password"
          autocomplete="off"  name="password">
          <span></span>
        
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="register" value="Login">
        <div class="signup_link">
          Not a member? <a href="index.php">Signup</a>
        </div>
      </form>
    </div>





<!-- <div class="form-container">
        <form class='signin-form' action="includes/login.inc.php" method="post">
            <input type="text"
             placeholder="Enter your username" 
             
             autocomplete="off"  name="username">
             <input type="password"
             placeholder="Enter your password" 
             required="required"
             autocomplete="off"  name="password">            
             <input type="submit" name="register" value="Sign In">
        </form>

        <div class="signin">
        Dont't have an account? <a href="index.php">Sign up</a>
    </div>

    </div> -->

</body>
</html>