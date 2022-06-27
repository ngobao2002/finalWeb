<?php

// MySQLi 
$servername = "fdb33.awardspace.net";
$username = "4089860_peacefulteam";
$database = "4089860_peacefulteam";
$password = "o919640468";

// create a connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

if($conn->connect_error){
    die("Connection failed: ". $conn->connection_error);
}else{
    error_log( "Connected! ");
}

?>