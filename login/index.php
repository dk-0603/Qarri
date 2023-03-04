<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <input type="text"
             placeholder="Enter your username" 
             required="required"
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
  
</body>
</html>