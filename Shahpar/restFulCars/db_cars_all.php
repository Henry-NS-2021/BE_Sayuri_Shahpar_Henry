<?php

// Require conn.php (DB connection) file
require_once("db_connect.php");

// This query will check do we have car_id in the table car
// for the provided $id

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = "SELECT * FROM car";
    // Perform a query on the DB
    $result = mysqli_query($db_connect, $sql);
}

// Close the DB connection
mysqli_close($db_connect);
