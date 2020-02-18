<!DOCTYPE html >
<html >
<link rel="stylesheet" type="text/css" href="myStyle_2.css" media="screen" />
<a href="index.html">Home</a>
<br>        
<br>
<head>
<title></title>
</head>
 
<body>
<form action="shops_input.php" method="post">
    <label>Store Name</label><input type="text" name="storename" id="storename"><br>
    <br>
    <label>Store Type</label><input type="text" name="storeType" id="storeType"><br>
    <br>
  <select id="storeLocation" name="storeLocation" onchange='Location(this.value);'> 
    <option>Store Location</option>  
    <option value="Bega">Bega</option>
    <option value="Bermagui">Bermagui</option>
    <option value="Candelo">Candelo</option>
    <option value="Cobargo">Cobargo</option>
    <option value="Eden">Eden</option>
    <option value="Kalaru">Kalaru</option>
    <option value="Merimbula">Merimbula</option>
    <option value="Pambula">Pambula</option>
    <option value="Quamma">Quaama</option>
    <option value="Tura Beach">Tura Beach</option>
    <option value="Tathra">Tathra</option>
    <option value="Wolumla">Wolumla</option>
    <option value="Not on the Sapphire Coast">Not on the Sapphire Coast</option>
    </select>
    <br>
    <br>
    <label>Issues</label><input type="text" name="issues" id="issues"><br>
    <br>
    <label>Door Width</label><input type="text" name="doorWidth" id="doorWidth"><br>
    <br>
    <label>Aisle Width</label><input type="text" name="aisleWidth" id="aisleWidth"><br>
    <br>
    <label>Counter Height</label><input type="text" name="counterHeight" id="counterHeight"><br>
    <br>
    <label>Assistive Technology</label><input type="text" name="assistiveTech" id="assistiveTech"><br>
    <br>
    <label>Accessible Parking Location</label><input type="text" name="accessCPlocat" id="accessCPlocat"><br>
    <br>
    <label>Distance to Accessible Parking</label><input type="text" name="accessCPdis" id="accessCPdis"><br>
    <input type="submit" value="Submit">
    </form>  
<table>
<br>
<br>
 <tr> 
 <td> Bega Shops test </td> 
</tr>
<?php
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

$sql = "SELECT storename, storeLocation, storeType, issues, doorWidth, aisleWidth, counterHeight, assistiveTech, accessCPlocat, accessCPdis  FROM begashops";
$result = $conn->query($sql);

if ($result->num_rows > 0){
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '<table border="1" cellspacing="2" cellpadding="3"> 
      <tr> 
          <td> <font face="Arial" font size="5" align="center">Store Name</font> </td> 
          <td> <font face="Arial" font size="5" align="center">Store Location</font> </td> 
          <td> <font face="Arial" font size="5" align="center">Store Type</font> </td>
          <td> <font face="Arial" font size="5" align="center">Issue/recommendation</font> </td> 
          <td> <font face="Arial" font size="5" align="center">Door Width</font> </td> 
          <td> <font face="Arial" font size="5" align="center">Aisle Width</font> </td>
          <td> <font face="Arial" font size="5" align="center">Counter Height</font> </td>
          <td> <font face="Arial" font size="5" align="center">Assistive Technology </font> </td>
          <td> <font face="Arial" font size="5" align="center">Accessible carpark location</font> </td>
          <td> <font face="Arial" font size="5" align="center">Accessible carpark distance</font> </td>
 </tr>';          
      
  echo "<td>". $row["storename"]. "</td>";
  echo "<td>". $row["storeLocation"].  "</td>";
  echo "<td>". $row["storeType"].  "</td>";
  echo "<td>". $row["issues"].  "</td>";
  echo "<td>". $row["doorWidth"].  "</td>";
  echo "<td>". $row["aisleWidth"].  "</td>";
  echo "<td>". $row["counterHeight"].  "</td>";
  echo "<td>". $row["assistiveTech"].  "</td>";
  echo "<td>". $row["accessCPlocat"].  "</td>";
  echo "<td>". $row["accessCPdis"].  "</td>";

    }
}else {
  echo "0 results";
}

$conn->close();
?> 

</table>
 
</body>
</html>