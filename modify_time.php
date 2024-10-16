<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Show Time</title>

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

    input[type="submit"] {
            background-color: crimson;
            color: #fff;
            border: none;
            padding: 10px 20px; 
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; 
        }


    input[type="submit"]:hover {
            padding top:  10px;
            background-color: #555;
        }
</style>

</head>

<body>
    <h1>Modify Show Time</h1>
    <form action="edit_time.php" method="POST">
        <label for="show_id">Select Show Time:</label>
        <select name="show_id" required>
            <option value="">Select Show Time</option>
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of movies from the database
            $query = "SELECT show_id, showtime FROM show_time";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['show_id']}'>{$row['showtime']}</option>";
                }
            }
            ?>
            
        </select>
        
        <label for="name">Show Time (HH:MM:SS)</label>
        <input type="text" name="showtime" required>
        
        <input type="submit" value="Edit Show Time">
    </form>
    <a href="./admin_page.php">Back</a>
</body>
</html>