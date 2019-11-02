<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "custinput";

//creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//checking connection

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$sname = mysqli_real_escape_string($conn, $_POST['sname']);

$sql = "INSERT INTO custinputf (name, sname) VALUES ('$name', '$sname')";

if($conn->query($sql) === TRUE){
    echo "record added sucessfully";
    }
else{
    echo"Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>