
<?php
$servername = "142.93.73.66";
$username = "root";
$dbname = "mysql";
// $_GET["password"]
$password = $_GET["password"];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "admin.shusiou.win<hr/>";

$sql = "SELECT * FROM `time_zone`;";
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

