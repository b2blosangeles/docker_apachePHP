
<?php
$servername = "192.168.0.21";
$username = "root";
$dbname = "mysql";
// $_GET["password"]
$password = $_GET["password"];
echo "test 323";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SHOW TABLES;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "0 results";
}

$conn->close();

?>

