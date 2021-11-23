<?php 

// Function for delivering a JSON response
function response($status,$status_message,$car_name,$data){
     
    // $response array
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['car_name']=$car_name;
    $response['price']=$data;
 
    //Generating JSON from the $response array
    $json_response=json_encode($response);
 
    // Outputting JSON to the client
    echo $json_response;
 }

?>