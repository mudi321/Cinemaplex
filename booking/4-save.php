<?php


session_start();

if(!isset($_SESSION['user_name'])){
  header('location:login_form.php');
}


// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"],$_POST["name"] ,$_POST["date"] ,$_POST["showtime"]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>CINEMAPLEX</title>
  <meta name="title" content="CINEMAPLEX">
  <meta name="description" content="MADE BY MUDI">

  
  <link rel="shortcut icon" href="../../favicon.ico" type="image/svg+xml">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CINEMAPLEX/assets/css/style.css">
    

        
</head>
<body id="top">

<!-- <div class="preload" data-preaload>
  <div class="circle"></div>
  <p class="text">CINEMAPLEX
  </div> -->

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

    <a href="../CINEMAPLEX/indexRegistered.php" class="logo">
      <img src="../CINEMAPLEX/assets/images/logo.svg" width="100" height="50" alt="CINEMAPLEX">
    </a>

    <nav class="navbar" data-navbar>

      <button class="close-btn" aria-label="close menu" data-nav-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="../CINEMAPLEX/indexRegistered.php" class="logo">
        <img src="./assets/images/logo.svg" width="100" height="50" alt="Home">
      </a>

      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="../CINEMAPLEX/indexRegistered.php" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">Home</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="../CINEMAPLEX/moviesRegistered.php" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">Movies</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="../CINEMAPLEX/aboutUsReg.php" class="navbar-link hover-underline ">
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
<div class="space"></div>
<div class="space"></div>





<main>
<article>
  

<section>

<center><h2 class="headline-1 section-title">Seats have been reserved.</h2>
<h2 class="headline-1 section-title">Thank you  <?php echo $_SESSION['user_name'] ?>.</h2></center>

<a href="../CINEMAPLEX/moviesRegistered.php" class="btn-text hover-underline label-2">Back to Movies</a>
</section> 






</article>
  </main>








</body>

</html>