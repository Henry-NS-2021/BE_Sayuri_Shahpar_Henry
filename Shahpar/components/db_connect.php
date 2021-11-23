<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fswd14_cr11_petadoption_shahpar";

// create connection
$db_connect = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if(mysqli_connect_error()) {
    die("Connection field: " . mysqli_connect_error());
} else {
    // echo "Successfully connected.";   
}