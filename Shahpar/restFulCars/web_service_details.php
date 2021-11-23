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

// Check if the id has a value
if(!empty($_GET['id'])){

   // Get the id value in the variable
   $id=$_GET['id'];

   // Require db_car_details.php file (check the id in the database and get the name and the price)
   require_once("db_car_details.php");
   // Require db_response_details.php file (create a json format for the client)
   require_once("db_response_details.php");

   // If the name and the price are empty - id doesn't exist - car not found
   if(empty($name) && empty($price)){
       response(200, "car not found", NULL, NULL);
   }
   // If the name and the price aren't empty - id exists - car found
   else{
       response(200, "car found" , $name, $price);
   }
}

// If the id is not set - request is not valid
else {
   response(400, "Invalid request", NULL, NULL);
}