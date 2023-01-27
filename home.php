<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv= "X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

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

      <section class="home"> 
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                   <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                   </div>
                </div>

                <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                   <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Discover new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                   </div>
                </div>

                <div class="swiper-slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                   <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>Make your travel worthwhile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                   </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
        </div>
      </section>

      <section class="services">
          <h1 class="heading-title"> Our Services</h1>

          <div class="box-container">
              <div class="box">
                  <img src="images\icon-1.png" alt="">
                  <h3>Adventure</h3>
              </div>

              <div class="box">
                <img src="images\icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images\icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images\icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images\icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="images\icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
          </div>
      </section>

      <section class="home-about">
        <div class="images">
            <img src="images\about-img.jpg" alt="">
        </div>
        
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet. Non nesciunt saepe est vitae architecto et rerum corporis ut recusandae suscipit. 
            Ut enim earum in nulla sint ut galisum ipsa sit modi ducimus non quaerat internos sit optio magnam At deserunt 
            velit.</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>


    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="images">
                    <img src="images\img-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet. Non nesciunt saepe est vitae architecto et rerum corporis ut recusandae suscipit.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="images">
                    <img src="images\img-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet. Non nesciunt saepe est vitae architecto et rerum corporis ut recusandae suscipit.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="images">
                    <img src="images\img-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet. Non nesciunt saepe est vitae architecto et rerum corporis ut recusandae suscipit.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet. Non nesciunt saepe est vitae architecto et rerum corporis ut recusandae suscipit. 
            Ut enim earum in nulla sint ut galisum ipsa sit modi ducimus non quaerat internos sit optio magnam At deserunt 
            velit.</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
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


