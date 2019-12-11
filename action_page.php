<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "form";

//creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//checking connection

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
$iUseA = mysqli_real_escape_string($conn, $_POST['iUseA']);
$sLocation = mysqli_real_escape_string($conn, $_POST['sLocation']);
$otherlocation = mysqli_real_escape_string($conn, $_POST['otherlocation']);
$issue = mysqli_real_escape_string($conn, $_POST['issue']);
$FileToUpload = mysqli_real_escape_string($conn, $_POST['fileToUpload']);

<<<<<<< HEAD
$sql = "INSERT INTO form2 (fname, email, sname, iUseA, sLocation, otherlocation, issue, fileToUpload) VALUES ('$fname','$email', '$sname', '$iUseA', '$sLocation', '$otherlocation', '$issue', '$fileToUpload' )";
=======
$sql = "INSERT INTO form2 (fname, email, sname, iUseA, sLocation, otherlocation, issue, fileToUpload) VALUES ('$fname', '$email', '$sname', '$iUseA', '$sLocation', '$otherlocation', '$issue', '$fileToUpload' )";
>>>>>>> master

if($conn->query($sql) === TRUE){
    echo "record added sucessfully";
    }
else{
    echo"Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>