<?php

require_once '../components/rest.php';

$joke_is = '';


if (isset($_GET['btn-joke'])) {
    $joke_is = displayJoke();
}




function displayJoke()
{
    $url = "http://api.serri.codefactory.live/random/";
    $jokes = curl_get($url);
    // var_dump($jokes);
    $joke = json_decode($jokes);
    return $joke-> joke;
}

?>

<?php

require_once '../components/rest.php';

if (isset($_GET['on'])) {
    onFunc();
}
if (isset($_GET['off'])) {
    offFunc();

    $joke_is = displayJoke();
}

function onFunc()
{
    echo "Button on Clicked";
}
function offFunc()
{
    echo "Button off clicked";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joke</title>

    <!-- Bootstrap css -->
    <?php require_once '../components/boot_css.php' ?>
    <!-- Fontawesome css -->
    <?php require_once '../components/fontawesome.php' ?>

</head>

<body>
    <main class='m-5'>

        <form action="jokes.php" method="get">
            <input type="submit" class="btn btn-warning" name='btn-joke' id='btn-joke' value='Show joke'/>
            <p id='joke-output'><?= $joke_is ?></p>
        </form>

    </main>
</body>

</html>