<?php
// Establish a MySQL connection
$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user ID is provided via POST
if (isset($_POST['show_id'])) {
    $show_id = $_POST['show_id'];

    // Retrieve user data from the form
    $showtime = $_POST['showtime'];
    

    // Update user data in the database
    $query = "UPDATE show_time SET showtime = '$showtime' WHERE show_id = $show_id";

    if (mysqli_query($connection, $query)) {
        echo "<h1><center>Time updated successfully.</center></h1>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
} else {
    // If no user ID is provided, display the modification form
    echo file_get_contents('modify_time.php');
}

// Close the database connection
mysqli_close($connection);
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
