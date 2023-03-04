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
        <form action="includes/login.inc.php">
            <input type="text"
             placeholder="Enter your username" 
             
             autocomplete="off"  name="username">
             <input type="password"
             placeholder="Enter your password" 
             required="required"
             autocomplete="off"  name="password">            
             <input type="submit" name="register" value="Sign In">
        </form>
    </div>

    <div class="signin">
        Dont't have an account? <a href="index.php">Sign up</a>
    </div>
  
</body>
</html>