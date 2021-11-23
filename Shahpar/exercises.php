<?php

require_once 'restFulCars/rest.php';

$api = 'http://localhost/BE_SHAHPAR_HENRY/Shahpar/restFulCars/web_service_cars.php';

$result= curl_get($api) ;

$api_cars = json_decode($result);
$cartBody = ''; //this variable will hold the body for the table

   

    foreach($api_cars->data as $car) {
        echo  $car->name . "<br>";
    }
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Exercise</title>
        <!-- Bootstrap css -->
        <?php require_once 'components/boot_css.php' ?>
    <!-- Fontawesome css -->
    <?php require_once 'components/fontawesome.php'; ?>
</head>

<body>

    <div class="container">

        <div id="cars-wrapper" class="row">
        <!--  -->
        test
        </div>

    </div>

</body>

</html>