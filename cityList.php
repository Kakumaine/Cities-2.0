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

$show = $_GET['id'];

$sql = "SELECT id, cityName FROM city WHERE countryId='$show'";

$result = $conn->query($sql);

echo "<h2><a href='country.php'>Back</a> - <a href='cityEdit.php'>Edit</a></h2><br><br>";

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()) {
        echo "<a href='cityInfo.php?id=".$row['id']."'>".$row["cityName"]."</a><br>";
    }
} else {
    echo "0 results";
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