<?php

// Require conn.php (DB connection) file
require_once("db_connect.php");

// This query will check do we have car_id in the table car
// for the provided $id
$sql = "SELECT * FROM car WHERE car_id=$id";

// Perform a query on the DB
$result = mysqli_query($db_connect, $sql);

// Fetch the query into $row
$row = mysqli_fetch_assoc($result);

// Store values into the variables
$name = $row['name'];
$price = $row['price'];

// Close the DB connection
mysqli_close($db_connect);
