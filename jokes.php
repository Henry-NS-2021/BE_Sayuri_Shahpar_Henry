

<?php

require_once 'components/rest.php';

    $url = "http://api.serri.codefactory.live/random/";
    $jokes = curl_get($url);
    // var_dump($jokes);
    $joke = json_decode($jokes);
    // echo $joke->joke;
    $joke_is = $joke->joke;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joke</title>

    <!-- Bootstrap css -->
    <?php require_once 'Shahpar/components/boot_css.php' ?>
    <!-- Fontawesome css -->
    <?php require_once 'Shahpar/components/fontawesome.php'; ?>

</head>

<body>
    <main>
        <button type="button" class="btn btn-warning" name='btn-joke' id='btn-joke'>Show joke</button>

        <p id='joke-output'></p>

    </main>
</body>

</html>