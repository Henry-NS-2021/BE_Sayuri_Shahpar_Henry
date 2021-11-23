<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Exercises</title>
</head>
<body>

<div class="container">

<div class="row">

    <?php

    require_once 'RESTful.php';

    $cities = array("37.8267,-122.4233", "42.3601,-71.0589", "48.20849,16.37208");

    foreach ($cities as $city) {

        $url = 'http://localhost/BE_SHAHPAR_HENRY/Shahpar/restFulCars/web_service.php?id=1';

        $result = curl_get($url);

        $weather = json_decode($result); //it turns the json into an object

        $fahrenheit= $weather->currently->temperature;//fetch the value from the temperature option

        $celsius = round(($fahrenheit - 32) * (5 / 9), 2);//convert fahrenheit into celsius

        echo "

        <div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>

            <p class='card-title'> {$weather->timezone} </p>

            <div class='card-body'>

                <p class='card-text'> {$weather->currently->summary} </p>

                <p class='card-text'>{$celsius}°C</p>

                <p class='card-text'>{$fahrenheit}°F</p>

            </div>

        </div>";

    }

    ?>

</div>

</div>
    
</body>
</html>