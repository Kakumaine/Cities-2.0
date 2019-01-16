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



$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        
    </body>
</html>