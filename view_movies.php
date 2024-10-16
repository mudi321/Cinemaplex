<?php
// Establish a MySQL connection
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all users from the database
$query = "SELECT * FROM movie";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
    html,
section {
  height: 135vh;
}

body {

margin: 0;
background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
font-family: 'Forum';
font-weight: 100;
text-align:center;
}
h1 {
background-color: crimson;
color: hsl(38, 61%, 73%);
padding: 10px 0;
margin: 20px 400px 20px 400px;
border-radius: 10px;
text-align:center;
    }

a {
color: hsl(38, 61%, 73%);
padding-block-end: 4px;
text-transform: uppercase;
letter-spacing: 0.1em;
font-weight: 700;

}   

.container {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

table {
  width: 800px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
  border-radius:10px;
}

th,
td {
  padding: 15px;
  background-color: rgba(255,255,255,0.2);
  color: #fff;
}

th {
  text-align: center;
}

thead {
  th {
    background-color: #55608f;
  }
}

tbody {
  tr {
    &:hover {
      background-color: rgba(255,255,255,0.3);
    }
  }
  td {
    position: relative;
    &:hover {
      &:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255,255,255,0.2);
        z-index: -1;
      }
    }
  }
}
  </style>


</head>
<body>
<section>
<h1>Movies List</h1>
<div class="container">






<?php
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Movie Name</th><th>Duration (mins)</th><th>Genre</th><th>Image Name</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['movie_id']}</td><td>{$row['name']}</td><td>{$row['duration']}</td><td>{$row['genre']}</td><td>{$row['image']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "No Movies found.";
}

mysqli_close($conn);
?>
</div>
</section>
</body>
</html>