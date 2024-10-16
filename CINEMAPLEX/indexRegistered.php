<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>CINEMAPLEX</title>
  <meta name="title" content="CINEMAPLEX">
  <meta name="description" content="MADE BY MUDITHA">

  
  <link rel="shortcut icon" href="./favicon.ico" type="image/svg+xml">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="./assets/css/style.css">

  
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">CINEMAPLEX
    </div>

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Temple Rd, Colombo, Sri Lanka.
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Open from 11.00 am to 10.00 pm</span>
      </div>

      
      <span class="span">Welcome <?php echo $_SESSION['user_name'] ?></span>
                        

      <a href="tel:011 123 1234" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">011 123 1234</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:cinemaplex@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">cinemaplex@gmail.com</span>
      </a>

    </div>
  </div>


  <header class="header" data-header>
    <div class="container">

      <a href="./indexRegistered.php" class="logo">
        <img src="./assets/images/logo.svg" width="100" height="50" alt="CINEMAPLEX">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="./indexRegistered.php" class="logo">
          <img src="./assets/images/logo.svg" width="100" height="50" alt="Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="./indexRegistered.php" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="./moviesRegistered.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Movies</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="./aboutUsReg.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          
        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">YOUR GATEWAY TO CINEMATIC DELIGHTS.</p>

          <address class="body-4">
            Temple Rd, Colombo, <br>
            Sri Lanka.
          </address>

          <p class="body-4 navbar-text">Open from 11.00 am to 10.00 pm</p>

          <a href="mailto:cinemaplex@gmail.com" class="body-4 sidebar-link">cinemaplex@gmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Contact Us</p>

          <a href="tel:011 123 1234" class="body-1 contact-number hover-underline">
            011 123 1234
          </a>
        </div>

      </nav>

      <a href="../booking/3a-reservation.php" class="btn btn-secondary">
        <span class="text text-1">Buy tickets</span>

        <span class="text text-2" aria-hidden="true">Buy tickets</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>


      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Enriching Lives through Captivating Cinema Experiences.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Immerse Yourself in a </br>World of Entertainment
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Embracing the Joy of Movie Discoveries
            </p>

            <a href="./moviesRegistered.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Movies</span>

              <span class="text text-2" aria-hidden="true">Movies</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Renewing Your Love for Cinematic Adventures.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Experience </br>the Magic of Film
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Embracing the Hope of Every Show.
            </p>

            <a href="./moviesRegistered.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Movies</span>

              <span class="text text-2" aria-hidden="true">Movies</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Find Comfort and Connection in Our Movie Community.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Find Solace in </br>the World of Film
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Nurturing Your Love for Entertainment.
            </p>

            <a href="./moviesRegistered.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Movies</span>

              <span class="text text-2" aria-hidden="true">Movies</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="../booking/3a-reservation.php" class="hero-btn has-after">
          <img src="./assets/images/now_showing/exclusives/ticket.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Buy tickets</span>
        </a>

      </section>
      
      <div class="margin"></div>
      
<!-- Movie Poster Slider -->
      <section class="hero2 text-center" aria-label="home" id="home">
        
        <ul class="hero-slider" data-hero-slider1>

          <li class="slider-item active" data-hero-slider-item1>

            <div class="slider-bg">
              <img src="./assets/images/Movie_posters/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Now Showing Movies</p>

            <h1 class="display-1 hero-title slider-reveal">
              </br>
              </br>
            I am Groot
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </br>
            </p>



          </li>

          <li class="slider-item" data-hero-slider-item1>

            <div class="slider-bg">
              <img src="./assets/images/Movie_posters/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Now Showing Movies</p>

            <h1 class="display-1 hero-title slider-reveal">
              </br>
              </br>
             Spider Man
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </br>
            </p>



          </li>

          <li class="slider-item" data-hero-slider-item1>

            <div class="slider-bg">
              <img src="./assets/images/Movie_posters/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Now Showing Movies</p>

            <h1 class="display-1 hero-title slider-reveal">
            </br>
          </br>
              Jhon Wick 
            </h1>

            <p class="body-2 hero-text slider-reveal">
            </br>
            </p>



          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn1>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn1>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="./moviesRegistered.php" class="hero-btn has-after">
          <img src="./assets/images/movie-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Now Showing</span>
        </a>

      </section>
   
    



      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Upcoming Releases</p>

          <h2 class="headline-1 section-title">Unparalleled Cinematic Journey.
            <br>
            <br>
            <br>
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="./pages/ntReleasedReg.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-1.jpg" width="285" height="336" loading="lazy" alt="M1"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="./pages/ntReleasedReg.php">Blue Beetle</a>
                  </h3>

                  

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="./pages/ntReleasedReg.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-2.jpg" width="285" height="336" loading="lazy" alt="M2"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="./pages/ntReleasedReg.php">The Creator</a>
                  </h3>

                  <a href="./moviesRegistered.php" class="btn-text hover-underline label-2">Movies</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="./pages/ntReleasedReg.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-3.jpg" width="285" height="336" loading="lazy" alt="M3"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="./pages/ntReleasedReg.php">Captain Marvel</a>
                  </h3>

                  

                </div>

              </div>
            </li>

          </ul>

          

        </div>
      </section>
    </article>
  </main>
  

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="./indexRegistered.php" class="logo">
            <img src="./assets/images/logo.svg" width="160" height="50" loading="lazy" alt="CINEMAPLEX">
          </a>
          <p class="body-4">
            Cinemaplex is your destination for an unparalleled cinematic experience. We are dedicated to bringing 
            the magic of the big screen to life, providing a diverse range of films that cater to every taste and age group. 
            Our state-of-the-art theater and cutting-edge technology ensure that your experience is nothing 
            short of extraordinary. With a team of passionate professionals who share your love for cinema, we are here to make
             every visit to Cinemaplex a memorable one. Join us for an unforgettable journey into the world of movies.
          </p>
          <address class="body-4">
            Temple Rd, Colombo, Sri Lanka.

          </address>

          <a href="mailto:cinemaplex@gmail.com" class="body-4 contact-link">cinemaplex@gmail.com</a>

          <a href="tel:011 123 1234" class="body-4 contact-link">Reserve Seats  : 011 123 1234</a>

          

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <!-- <p class="title-1">Stay Informed about the Latest Updates.</p>

          <p class="label-1">
            Subscribe to Our Newsletter
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form> -->

        </div>

        <ul class="footer-list">

          <li>
            <a href="./indexRegistered.php" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="./moviesRegistered.php" class="label-2 footer-link hover-underline">Movies</a>
          </li>

          <li>
            <a href="./aboutUsReg.php" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <a href="https://web.facebook.com/login/?_rdc=1&_rdr" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="https://www.instagram.com/accounts/login/" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="https://www.youtube.com/" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

        </ul>

      </div>

    

    </div>
  </footer>


  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <script src="./assets/js/script.js"></script>

  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>