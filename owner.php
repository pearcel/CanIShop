<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "info";

//creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//checking connection

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

$sql = "INSERT INTO infom (name, sname, comments) VALUES ('$name', '$sname', '$comments')";

if($conn->query($sql) === TRUE){
    echo "record added sucessfully";
    }
else{
    echo"Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>