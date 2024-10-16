
<?php
// Establish a MySQL connection
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user ID is provided via POST
if (isset($_POST['movie_id'])) {
    $movie_id = $_POST['movie_id'];

    // Delete the user from the database
    $query = "DELETE FROM movie WHERE movie_id = $movie_id";

    if (mysqli_query($conn, $query)) {
        echo "<h1><center>Movie deleted successfully.</h1></center>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // If no user ID is provided, display the deletion form
    echo file_get_contents('delete_movies.php');
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