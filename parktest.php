<!DOCTYPE html >
<html >
<link rel="stylesheet" type="text/css" href="myStyle_2.css" media="screen" />
        <a href="index.html">Home</a>

<head>
<head>
<title></title>
</head>
 
<body>
<table>
 <tr> 
 <td> Disabled Parking </td> 
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "access_parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Shop, Location, NumberOfSpots, ParkingType FROM parking";
$result = $conn->query($sql);

if ($result->num_rows > 0){
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '<table border="4" cellspacing="10" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial" font size="5" align="left">Shop</font> </td> 
          <td> <font face="Arial" font size="5" align="left">Location</font> </td> 
          <td> <font face="Arial" font size="5" align="left">Number of spots</font> </td> 
          <td> <font face="Arial" font size="5" align="left">Type of parking</font> </td> 
 </tr>';          
      
  echo "<td>". $row["Shop"]. "</td>";
  echo "<td>". $row["Location"].  "</td>";
  echo "<td>". $row["NumberOfSpots"].  "</td>";
  echo "<td>". $row["ParkingType"].  "</td>";
  
     
    }
}else {
  echo "0 results";
}

$conn->close();
?> 

</table>
 
</body>
</html>