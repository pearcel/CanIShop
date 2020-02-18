<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "shops";

//creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//checking connection

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$storename = mysqli_real_escape_string($conn, $_POST['storename']);
$storeType = mysqli_real_escape_string($conn, $_POST['storeType']);
$storeLocation = mysqli_real_escape_string($conn, $_POST['storeLocation']);
$issues = mysqli_real_escape_string($conn, $_POST['issues']);
$doorWidth = mysqli_real_escape_string($conn, $_POST['doorWidth']);
$aisleWidth = mysqli_real_escape_string($conn, $_POST['aisleWidth']);
$counterHeight = mysqli_real_escape_string($conn, $_POST['counterHeight']);
$assistiveTech = mysqli_real_escape_string($conn, $_POST['assistiveTech']);
$accessCPlocat = mysqli_real_escape_string($conn, $_POST['accessCPlocat']);
$accessCPdis = mysqli_real_escape_string($conn, $_POST['accessCPdis']);
$sql = "INSERT INTO begashops (storename, storeType, storeLocation, issues, doorWidth, aisleWidth, counterHeight, assistiveTech, accessCPlocat, accessCPdis) VALUES ('$storename', '$storeType', '$storeLocation', '$issues', '$doorWidth', '$aisleWidth', '$counterHeight', '$assistiveTech', '$accessCPlocat', '$accessCPdis')";

if($conn->query($sql) === TRUE){
    echo "record added sucessfully";
    }
else{
    echo"Error" . $sql . "<br/>" . $conn->error;
}

$conn->close();

?>