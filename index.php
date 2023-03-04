<?php
 session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Business Website</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
   
	<header>
        <div class="container">
		<img class="logo" src="images/logo.png" alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
           
        </nav>

        <?php 
      if(isset($_SESSION["userid"])){
      ?>

        <a class="cta" href="login/includes/logout.inc.php"><button>Log Out</button></a>
     
        <?php  
        }
        else{
        ?>
         
         <a class="cta" href="login/signin.php"><button>Log In</button></a>
         <?php  
        }     
        ?>   

        
    </div>  
	</header>

</body>
</html>

