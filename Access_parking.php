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