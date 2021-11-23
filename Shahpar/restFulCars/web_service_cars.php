<?php

require_once 'db_response_details.php';

/****************************************
 *######## RESTful WEB SERVICE ##########*
 *                                       *
 * Client process the request VIA URL    *
 * http://address.com/webservice.php?id=1*
 * and gets the JSON result.             *
 ****************************************/
// Set Content-Type header to application/json
header("Content-Type:application/json");


// Require db_car_details.php file (return all cars)
require_once("db_cars_all.php");

// Require db_response_details.php file (create a json format for the client)
require_once("db_response_all.php");


if ($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    response_all(200, 'Data fetched successfully', $rows);
} else {
    response_all(400, 'error: ' . mysqli_error($db_connect));
}
