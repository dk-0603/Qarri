<?php
 session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Qarri</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="header">
      <nav>
        <a href="index.php"><img src="images/logo.png" alt="logo"></a>
        <div class="hamburger-button" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        <div class="nav-links" id="nav-links">

          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div class="text-box">
        <h1>Zdrukthtaria QARRI</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nam ipsam corporis error sit ex nesciunt reprehenderit aliquid corrupti illum.</p>
        <a href="#" class="hero-btn">Visit us to know more</a>
      </div>

    
    </section>

    <section class="sherbimet">
      <h1>Sherbimet qe ofrojme</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="sherbimi-col">
          <h3>Dyer</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis et est culpa at magni autem pariatur quos a? Doloribus dolore repellat fugit modi perferendis! Cum quibusdam rerum itaque sapiente. Ipsa similique molestias reprehenderit esse recusandae quidem expedita possimus labore neque harum, praesentium ex quasi architecto, excepturi atque distinctio facere ratione.</p>
        </div>
        <div class="sherbimi-col">
          <h3>Dhoma</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis et est culpa at magni autem pariatur quos a? Doloribus dolore repellat fugit modi perferendis! Cum quibusdam rerum itaque sapiente. Ipsa similique molestias reprehenderit esse recusandae quidem expedita possimus labore neque harum, praesentium ex quasi architecto, excepturi atque distinctio facere ratione.</p>
        </div>
        <div class="sherbimi-col">
          <h3>Kuzhina</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis et est culpa at magni autem pariatur quos a? Doloribus dolore repellat fugit modi perferendis! Cum quibusdam rerum itaque sapiente. Ipsa similique molestias reprehenderit esse recusandae quidem expedita possimus labore neque harum, praesentium ex quasi architecto, excepturi atque distinctio facere ratione.</p>
        </div>
      </div>
    </section>

    <section class="produktet">
      <h1>Produktet tona</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, molestias.</p>
    
            
          <div id="slider-container" class="slider">
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1574482620811-1aa16ffe3c82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1574451311232-cb647e9d71f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1574449423472-4bc6a3d2473d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1574459472673-09bbda49102a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=928&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1479981280584-037818c1297d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1511593358241-7eea1f3c84e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=20" alt="">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1560259324-12a044e67c34?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=20" alt="">
            </div>
            <div class="slide">
                <img src="images.unsplash.com/photo-1532787799187-93655e51d472?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=20" alt="">
            </div>
            <div onclick="prev()" class="control-prev-btn">
              <i class="fas fa-arrow-left"></i>
            </div>
            <div onclick="next()" class="control-next-btn">
              <i class="fas fa-arrow-right"></i>
            </div>
          </div>


          <div class="overlay"></div>

             
    </section>
   <script src="script.js"></script>
</body>
</html>

