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
            <a href="./indexRegistered.php" class="navbar-link hover-underline">
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
            <a href="./aboutUsReg.php" class="navbar-link hover-underline active">
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
              <img src="./assets/images/AboutUs/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">EXPERIENCE CINEMA, YOUR WAY</p>

            <h1 class="display-1 hero-title slider-reveal">
              Cinema Reimagined For <br> You.
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Ignitting Your Love For The Big Screen.
            </p>

            <a href="./moviesRegistered.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Movies</span>

              <span class="text text-2" aria-hidden="true">Movies</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/AboutUs/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Renewing Your Love for Cinematic Adventures.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Fall in Love With Movies All Over Again.
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
              <img src="./assets/images/AboutUs/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Find Comfort and Connection in Our Movie Community.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Refresh Your Cinematic <br>Journey with Cinemaplex.
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

          <span class="label-2 text-center span">Buy Tickets</span>
        </a>

      </section>
      
      <div class="margin"></div>

      <!-- our vision -->
      
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Inspiring Insight, Cultivating Excellence.</p>

            <h2 class="headline-1 section-title">Our Vision...</h2>

            <p class="section-text">
              To be the leading innovator in the world of cinema, redefining the entertainment experience for audiences of diverse backgrounds by pushing boundaries and delivering creative solutions that transcend industry norms.
            </p>
          </div>

          <img src="./assets/images/AboutUs/about-banner.jpg" alt="cofee-shop">
          

        </div>
      </section>
      <!--our mission-->
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Fueling Passion, Instilling Values.</p>

            <h2 class="headline-1 section-title">Our Mission...</h2>

            <p class="section-text">
              To provide a wide range of enriching and enjoyable cinematic experiences to our customers through a collection of exceptional brands, fostered by a nurturing organizational culture dedicated to optimizing value for all our stakeholders.
            </p>
          </div>

          <img src="./assets/images/AboutUs/about-banner2.jpg" alt="cofee-shop">
          

        </div>
      </section>

      <!-- Testimonial -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/AboutUs/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            We're dedicated to shaping the future of entertainment by creating awareness and nurturing audiences who appreciate exemplary storytelling and cinematic experiences.          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/AboutUs/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Muditha Kalansooriya"
              class="img">

            <p class="label-2 profile-name">Muditha Kalansooriya</p>
            <p class="label-2 profile-name2">Managing Director of CINEMAPLEX</p>
          </div>

        </div>
      </section>

      <!-- our story -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="./assets/images/AboutUs/story-banner.jpg" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Elevating Your Cinematic Journey.</p>

            <h2 class="headline-1 section-title">Our Story...</h2>

            <p class="section-text">
              Our journey commenced on March 08, 2001, when Cinemaplex was founded with a shared vision of bringing the magic of cinema to audiences far and wide. Since that momentous day, we have been on a mission to captivate hearts, spark imagination, and build a community of dedicated film enthusiasts. Every day, we add new chapters to our story, filled with the joy of cinematic experiences, guided by our unwavering commitment to delivering the best in entertainment to our valued patrons.
            </p>


          </div>
        </div>

      </section>
   
      <!-- our team -->
      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Our Team</p>

          <h2 class="headline-1 section-title text-center">We're more than a team; We're a family.</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/AboutUs/hs-1.png" width="100px" height="100px" loading="lazy" alt="Managing Director"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Muditha Kalansooriya</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    Managing Director
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/AboutUs/hs-2.png" width="100" height="100" loading="lazy" alt="Theater Manager"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Sarah Johnson</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    Theater Manager
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/AboutUs/hs-3.png" width="100" height="100" loading="lazy" alt="Projectionist"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Emily Brown</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    Projectionist </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/AboutUs/hs-4.png" width="100" height="100" loading="lazy" alt="Marketing Coordinator"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Michael Davis</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    Marketing Coordinator
                  </p>

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