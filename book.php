<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv= "X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>book</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" media="screen and (max-width:800px)" href="tablet.css">
        <link rel="stylesheet" media="screen and (max-width:360px)" href="phone.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>

  <body>
      <section class="header">
          <a href="home.php" class="logo">Travel</a>

          <nav class="navbar">
              
                <a href="home.php">Home</a>
                <a href="about.php">About us</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                
          </nav>
          <div id="menu-btn" class="fa fa-bars"></div>
      </section>

      <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>Book Now</h1>
      </div>


      <section class="booking">
        <h1 class="heading-title">Book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">

           <div class="flex">
             <div class="inputBox">
               <span>Name :</span>
               <input type="text" placeholder="Enter your name" name="name">
             </div>
             <div class="inputBox">
               <span>E-mail :</span>
               <input type="email" placeholder="Enter your e-mail" name="email">
             </div>
             <div class="inputBox">
               <span>Phone :</span>
               <input type="number" placeholder="Enter your number" name="phone">
             </div>
             <div class="inputBox">
               <span>Address :</span>
               <input type="text" placeholder="Enter your address" name="address">
             </div>
             <div class="inputBox">
               <span>Where to :</span>
               <input type="text" placeholder="Place you want to visit" name="location">
             </div>
             <div class="inputBox">
               <span>How many :</span>
               <input type="number" placeholder="Number of guests" name="guests">
             </div>
             <div class="inputBox">
               <span>Arrivals :</span>
               <input type="date" name="arrivals">
             </div>
             <div class="inputBox">
               <span>Leaving :</span>
               <input type="date" name="leaving">
             </div>
           </div>

           <input type="submit" value="submit" class="btn" name="send">

        </form>
      </section>


      <section class="footer">
          <div class="box-container">
              <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fa fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fa fa-angle-right"></i>about us</a>
                <a href="package.php"><i class="fa fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fa fa-angle-right"></i>book</a>
              </div>

              <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fa fa-angle-right"></i>Ask questions</a>
                <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                <a href="#"><i class="fa fa-angle-right"></i>Privacy policy</a>
                <a href="#"><i class="fa fa-angle-right"></i>Terms of use</a>
              </div>

              <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fa fa-phone"></i>+919281764277</a>
                <a href="#"><i class="fa fa-phone"></i>+919281764277</a>
                <a href="#"><i class="fa fa-envelope"></i>tangiblesociety@gmail.com</a>
                <a href="#"><i class="fa fa-map"></i>Bhubaneswar, India-751003</a>
              </div>

              <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fa fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fa fa-linkedin"></i>Linkedin</a>
              </div>
          </div>

          <div class="credit"> created by <span>Prachoorya</span>  |All rights reserved!|  </div>
      </section>



      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

      <script src="script.js"></script>
  </body>
  </html>
