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
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
$iUseA = mysqli_real_escape_string($conn, $_POST['iUseA']);
$issue = mysqli_real_escape_string($conn, $_POST['issue']);
$FileToUpload = mysqli_real_escape_string($conn, $_POST['fileToUpload']);

$sql = "INSERT INTO form2 (fname, sname, iUseA, issue, fileToUpload) VALUES ('$fname', '$sname', '$iUseA', '$issue', '$fileToUpload' )";

if($conn->query($sql) === TRUE){
    echo "record added sucessfully";
    }
else{
    echo"Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>