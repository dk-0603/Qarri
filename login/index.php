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
      <h1>Sign Up</h1>
      <form action="includes/signup.inc.php" method="post">
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

        <div class="txt_field">
          <input type="password"
          placeholder="Confirm your password"
          autocomplete="off"  name="confirm_password">
          <span></span>       
        </div>


        <div class="pass">Forgot Password?</div>
        <input type="submit" name="register" value="SignUp">
        <div class="signup_link">
          Already a user? <a href="signin.php">Log In</a>
        </div>
      </form>
    </div>

    <!-- <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <input type="text"
             placeholder="Enter your username" 
             
             autocomplete="off"  name="username">
             <input type="password"
             placeholder="Enter your password" 

             autocomplete="off"  name="password">    

             <input type="password"
             placeholder="Confirm password" 
 
             autocomplete="off"  name="confirm_password">  
             <input type="submit" name="register" >
        </form>
    </div>

    <div class="signin">
        Already have an account? <a href="signin.php">Sign in</a>
    </div>
   -->
</body>
</html>