<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Kakumaine1299";
$dbname = "citys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql);

$input=$_POST['name'];

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post">
            <input type="text" name="name">

            <button type="submit">Post</button>
        </form>
    </body>
</html>