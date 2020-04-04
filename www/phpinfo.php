
<?php
$servername = " 142.93.73.66 ";
// servername = "127.0.0.1";
$username = "root";
$password = 'Trinet2020#';
$dbname = "test";
// $_GET["password"]
echo $_GET["password"];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "test 3";
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
$conn->close();

?>

