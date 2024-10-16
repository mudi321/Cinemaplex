<?php
require 'connection.php';

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $genre = $_POST["genre"];
  $duration = $_POST["duration"];

  if ($_FILES["image"]["error"] == 4) {
    echo "<script> alert('Image Does Not Exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
      echo "<script> alert('Invalid Image Extension'); </script>";
    } else if ($fileSize > 10000000) {
      echo "<script> alert('Image Size Is Too Large'); </script>";
    } else {
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'CINEMAPLEX/uploads/' . $newImageName);
      $query = "INSERT INTO movie (name, genre, duration, image) VALUES ('$name', '$genre', '$duration', '$newImageName')";
      mysqli_query($conn, $query);
      echo "<script> alert('Successfully Added'); document.location.href = 'admin_page.php'; </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add Movies</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      font-family: 'Forum';
      background-color: hsla(30, 8%, 5%, 1);
      margin: 0;
      padding: 0;
      text-align: center;
    }

    h1 {
      background-color: crimson;
      color: hsl(38, 61%, 73%);
      padding: 10px 0;
      margin: 20px 400px 20px 400px;
      border-radius: 10px;
    }

    form {
      background-color: #D8D9DA;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      margin: 50px auto;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
      width: 90%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: crimson;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #555;
    }

    a {
    color: hsl(38, 61%, 73%);
    padding-block-end: 4px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 700;
    
    }
  </style>
</head>
<body>
<h1>Add Movies</h1>
  <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required value=""><br>

    <label for="genre">Genre: </label>
    <input type="text" name="genre" id="genre" required value=""><br>

    <label for="duration">Duration (in minutes): </label>
    <input type="number" name="duration" id="duration" required value=""><br>

    <label for="image">Image: </label>
    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br>

    <button type="submit" name="submit">Submit</button>
  </form>
  <br>
  <a href="./admin_page.php">Back</a>
</body>
</html>
