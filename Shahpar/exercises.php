<?php

require_once 'web_service_cars.php';
$api = 'http://localhost/BE_SHAHPAR_HENRY/Shahpar/restFulCars/web_service_cars.php';
var_dump($api );
$api_encode= json_encode($api) ;

$cartBody = ''; //this variable will hold the body for the table
if (array_count_values($$api_encode) > 0) {
    while ($$api_encode < 0) {
        $cartBody .= "<div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
        <p class='card-title'> {$weather->timezone} </p>
        <div class='card-body'>
            <p class='card-text'> {$weather->currently->summary} </p>
            <p class='card-text'>{$celsius}°C</p>
            <p class='card-text'>{$fahrenheit}°F</p>
        </div>
    </div>";
    };
} else {
    $cartBody =  "<p><center>No Data Available </center></p>";
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
        <?php require_once '../components/boot_css.php' ?>
    <!-- Fontawesome css -->
    <?php require_once '../components/fontawesome.php'; ?>
</head>

<body>

    <div class="container">

        <div id="cars-wrapper" class="row">
        <?= $cartBody; ?>
        </div>

    </div>

</body>

</html>