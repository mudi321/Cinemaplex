<!DOCTYPE html>
<html>
<head>
    <title>Edit Movies</title>
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
            background-color:#D8D9DA;
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

        select,
        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: crimson;
            color: #fff;
            border: none;
            padding: 10px 20px; /* 10px padding top and bottom, 20px padding left and right */
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Add 10px padding to the top */
        }

        input[type="submit"]:hover {
            padding top:  10px;
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
    <h1>Edit Movies</h1>
    <form action="edit_movies.php" method="POST">
        <label for="movie_id">Select Movies:</label>
        <select name="movie_id" required>
            <option value="">Select Movies</option>
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of movies from the database
            $query = "SELECT movie_id, name, duration, genre, image FROM movie";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['movie_id']}'>{$row['name']} {$row['duration']} {$row['genre']} {$row['image']}</option>";
                }
            }
            ?>
            
        </select>
        
        <label for="name">Movie Name:</label>
        <input type="text" name="name" required>

        <label for="duration">Duration:</label>
        <input type="text" name="duration" required>
        
        <label for="genre">Genre:</label>
        <input type="text" name="genre" required>
        
        <input type="submit" value="Edit Movie">
    </form>
    <a href="./admin_page.php">Back</a>
</body>
</html>
