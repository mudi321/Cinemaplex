<?php

session_start();

if(!isset($_SESSION['user_name'])){
  header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Book Tickets</title>
    <meta charset="utf-8">
    <meta name="title" content="CINEMAPLEX">
    <meta name="description" content="MADE BY MUDITHA">

  
  
  <link rel="shortcut icon" href="../CINEMAPLEX/favicon.ico" type="image/svg+xml">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    <script src="3b-reservation.js"></script>
    <link rel="stylesheet" href="3c-reservation.css">
  </head>

  



  <body>

  <span class="span">Welcome!!!  <?php echo $_SESSION['user_name'] ?></span>
  <h1> Reserve Your Seats</h1>
<!-- Modified -->

<div class="theater-container">
  
<form id="ninja" method="post" action="4-save.php">

        <label for="name"><span class="txt">Select Movies :</span></label>
        <select name="name" >
            <!-- <option value="">Select Movies</option> -->
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of Movies from the database
            $query = "SELECT movie_id, name FROM movie";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value ='{$row['movie_id']}' >{$row['name']}</option>";
                }
            }
            

            ?>
  
        </select>
            <?php 
            $date = date('Y-m-d');
            ?>
        
        <label for=""><span class="txt">  Date :</span></label>
        <input type="date" name="date" value="<?=$date?>">

        <label for="showtime"><span class="txt">  Shotime :</span></label>
        <select name="showtime" value="<?=$showtime?>">
          
          <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of Movies from the database
            $query = "SELECT DATE_FORMAT(showtime, '%H:%i') as formatted_showtime FROM show_time";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['formatted_showtime']}'>{$row['formatted_showtime']}</option>";
                }
            }
            ?>

        </select>
  </div>
          
        
    <?php
    
    $sessid = 1;
    $userid = $_SESSION['user_name'];
    

    // (B) GET SESSION SEATS
    require "2-reserve-lib.php";
    $seats = $_RSV->get($sessid);
    ?>

            <!-- Screen -->

            <button class='glowing-btn'><span class='glowing-txt'>S<span class='faulty-letter'>C</span>REEN</span></button>

    
    <div id="layout">
    <?php
    foreach ($seats as $s) {
      $taken = is_string($s["user_id"]);
      printf("<div class='seat%s'%s>%s</div>",
        $taken ? " taken" : "",
        $taken ? "" : " onclick='reserve.toggle(this)'",
        $s["seat_id"]
      );
    }
    ?>
  </div>  
  

    
    <div id="legend">
      <div class="seat"></div> <div class="txt">Available</div>
      <div class="seat taken"></div> <div class="txt">Booked</div>
      <div class="seat selected"></div> <div class="txt">Selected Seats</div>
    </div>
<!-- Modified -->
<div class = "price"> 
    
     <center> <p class="txt">Selected Seats - </p><p id="count">0</p></center>
     <center><p class="txt">Total - RS. </p><p id="total">0</p></center>
     
 </div> 
      <input type="hidden" name="sessid" value="<?=$sessid?>">
      <input type="hidden" name="userid" value="<?=$userid?>">
    </form>
    <button id="go" onclick="reserve.save()">Reserve Seats</button>



    




  </body>
</html>