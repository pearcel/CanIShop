<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "custinput";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sname FROM custinputf";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Store Name: ". $row["sname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>