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

if ($show <= 4){
    echo "<h2><a href='cityList.php?id=1'>Back</a> - <a href='cityEdit.php'>Edit</a></h2><br><br>";
} else if ($show <= 8 && $show > 4) {
    echo "<h2><a href='cityList.php?id=2'>Back</a> - <a href='cityEdit.php'>Edit</a></h2><br><br>";
} else {
    echo "<h2><a href='cityList.php?id=3'>Back</a> - <a href='cityEdit.php'>Edit</a></h2><br><br>";
}

$sql = "SELECT id, cityName, invanare FROM city WHERE id='$show'";

$result = $conn->query($sql);

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()) {
        
        echo "Antal invånare i ".$row["cityName"].": ".$row["invanare"]."<br>";
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