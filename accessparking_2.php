<!DOCTYPE html>
<html>
        <link rel="stylesheet" type="text/css" href="myStyle_2.css" media="screen" />

        <a href="index.html">Home</a>
    
        <body lang="en-AU" dir="ltr"><p><br/>
        <h1 class="western" align="center">Can I Shop There?.</h1>
        <h2 class="western" align="center">Use this page to add Accessible parking locations.</h2>
    <head>
        <title>Add to Accessible Parking</title>
                <meta charset="utf-8">
    </head>
<body>

<br>
<br>
<form action="Accessparking_2.php" method="post">
    <label>Shop or Office</label><input type="text" name="Shop" id="Shop"><br>
    <br>
    <label>Location of spaces</label><input type="text" name="Location" id="Location"><br>
    <br>
    <label>Number of spaces</label>
    <select name="NumberOfSpots">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5+">5+</option>
      </select>
    <br>
    <br>
    <label>Type of parking</label>
    <select name="ParkingType">
          <option value="Public">Public</option>
          <option value="Private">Private</option>
          <option value="Reserved">Reserved</option>
          <option value="Closed">Closed</option>
        </select><br>
        <br>
    <input type="submit" value="Submit">
    </form>

<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "access_parking";
    
    //creating connection for mysqli
    
    $conn = new mysqli($server, $user, $pass, $dbname);
    
    //checking connection
    
    if($conn->connect_error){
        die("connection failed:" . $conn->connect_error);
    }
    
    $Shop = mysqli_real_escape_string($conn, $_POST['Shop']);
    $Location = mysqli_real_escape_string($conn, $_POST['Location']);
    $NumberOfSpots = mysqli_real_escape_string($conn, $_POST['NumberOfSpots']);
    $ParkingType = mysqli_real_escape_string($conn, $_POST['ParkingType']);
    
    $sql = "INSERT INTO parking (Shop, Location, NumberOfSpots, ParkingType) VALUES ('$Shop', '$Location', '$NumberOfSpots', '$ParkingType')";
    
    if($conn->query($sql) === TRUE){
        echo "record added sucessfully";
        }
    else{
        echo"Error" . $sql . "<br/>" . $conn->error;
    }
    $conn->close();
    
    ?>
 </body>
    </html>