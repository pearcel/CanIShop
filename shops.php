<<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shops";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT storename, storeType, storeLocation, issues, doorWidth, aisleWidth, counterHeight, assistiveTech, accessibleParkingLocation, Distance2Parking FROM begashops ORDER BY storename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<br>______________________________";
        echo "<br> Store Name: ". $row["storename"] . "</br>";
        echo "<br> Store Type: ". $row["storeType"] . "</br>";
        echo "<br> Store Location: ". $row["storeLocation"] . "</br>";
        echo "<br> Issues: ". $row["issues"] . "</br>";
        echo "<br> Door Width: ". $row["doorWidth"] . "</br>";
        echo "<br> Aisle Width: ". $row["aisleWidth"] . "</br>";
        echo "<br> Counter Height: ". $row["counterHeight"] . "</br>";
        echo "<br> Assistive Technology: ". $row["assistiveTech"] . "</br>";
        echo "<br> Accessible Parking Location: ". $row["accessCPdis"] . "</br>";
        echo "<br> Accessible Parking Distance: ". $row["accessCPlocat"] . "</br>";
         }
        
    }
 else {
    echo "0 results";
}

$conn->close();
?>