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

$sql = "INSERT INTO city VALUES ('Göteborg')";

if ($conn->query($sql)===TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is:" . $last_id;
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        
    </body>
</html>