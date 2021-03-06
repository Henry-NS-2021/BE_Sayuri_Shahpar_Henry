<?php

require_once 'restFulCars/rest.php';

$api = 'http://localhost/BE_SHAHPAR_HENRY/Shahpar/restFulCars/web_service_cars.php';

$result = curl_get($api);

$api_cars = json_decode($result);
$cartBody = ''; //this variable will hold the body for the table



foreach ($api_cars->data as $car) {

    $cartBody .= "<div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>

        <img src='pictures/$car->car_id.png' class='card-img-top' alt='$car->name'>
       
        <div class='card-body'>
            <p class='card-text'>Name: {$car->name} </p>

            <p class='card-text'>Price: {$car->price} </p>
          </p>
         
        </div>
    </div>";
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
        <h3 class="mt-3 mb-5 text-center">Cars</h3>
        <div id="cars-wrapper" class="row justify-content-between">
            <?= $cartBody ?>

        </div>

    </div>

</body>

</html>