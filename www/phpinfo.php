
<?php
$servername = "142.93.73.66";
$username = "root";
$password = $_GET["password"];
$dbname = "mysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW TABLES";
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

