<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, sname, iUseA, sLocation, otherlocation, issue FROM form2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["fname"]. " - Store Name: ". $row["sname"]. " - I use a: ". $row["iUseA"]. " - Store Location: ". $row["sLocation"]. " - Other Location: ". $row["otherlocation"]." - Issue: ". $row["issue"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>