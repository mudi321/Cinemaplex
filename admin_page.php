<?php

include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3><span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Admin Panel</p>
      
      
      <!-- Movie management -->
      <a href="view_movies.php" class="btn">View Movies</a>
      <a href="add_movie.php" class="btn">Add Movies</a>
      <a href="delete_movies.php" class="btn">Delete Movies</a>
      <a href="modify_movies.php" class="btn">Edit Movies</a>

      <!-- Showtime management -->
      <a href="add_time.php" class="btn">Add Showtime</a>
      <a href="modify_time.php" class="btn">Change Showtime</a>
      <a href="view_time.php" class="btn">View Showtime</a>

      <!-- fix this important -->
      <a href="view_booking.php" class="btn">View Bookings</a>  

      <!-- User management -->
      <a href="register_form.php" class="btn">Register a User Account</a>
      <a href="view_users.php" class="btn">View Users</a>
      <a href="delete_users.php" class="btn">Delete Users</a>

      <a href="logout.php" class="btn">logout</a>




   </div>

</div>

</body>
</html>