<?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");


  session_start();

            if(!isset($_SESSION['admin_name'])){
            header('location:login_form.php');
            } 
if (isset($_POST['movie_id'])) {
    $movie_id = $_POST['movie_id'];
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $genre = $_POST['genre'];
    

    
    $query = "UPDATE movie SET name = '$name', duration = '$duration', genre = '$genre'  WHERE movie_id = $movie_id";

    if (mysqli_query($conn, $query)) {
        echo "<h1><center>Movie updated successfully.</center></h1>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    } else {
    
    echo file_get_contents('modify_movies.php');
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <style>
    body {
        font-family: 'Forum';
      background-color: #D8D9DA;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    a {
    color: crimson;
    padding-block-end: 4px;
    text-transform: uppercase;
    text-decoration: none;
    font-weight: 700;
    font-size:1rem;
    
    
    }</style>
</head>
<body>
<a href="./admin_page.php">Back to Admin Panel</a>
    
</body>
</html>