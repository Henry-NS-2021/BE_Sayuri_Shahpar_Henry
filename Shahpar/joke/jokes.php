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
    return $joke->joke;
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
            <input type="submit" class="btn btn-warning" name="btn-joke" id='btn-joke' value='Show joke' />
            <p id='joke-output'><?= $joke_is ?></p>
        </form>


        <!-- AJAX Method -->
        <hr>
        <div class="container">
            <h1>AJAX</h1>
            <button class="btn btn-outline-dark p-3 border rounded" id="ajax-btn">Get Joke</button>
            <div class="joke-div" id="joke">

            </div>
        </div>

        <!-- Javascript -->
        <script>
            // ERROR THROWN ON CONSOLE .....
            // Access to XMLHttpRequest at 'http://api.serri.codefactory.live/random/' from origin 'http://localhost' has been blocked by CORS policy: No 'Access-Control-Allow-Origin' header is present on the requested resource.
            const jokeBtn = document.getElementById('ajax-btn');
            jokeBtn.addEventListener('click', getJoke, false)

            function getJoke() {
                const ajax = new XMLHttpRequest();
                ajax.open("GET", 'get_joke.php', true);
                // ajax.setRequestHeader('Access-Control-Allow-Methods', 'GET,POST,OPTIONS,DELETE,PUT');
                // ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                // ajax.setRequestHeader("Access-Control-Allow-Origin", "*");
                // ajax.setRequestHeader('Access-Control-Allow-Methods', 'GET,POST,OPTIONS,DELETE,PUT');
                ajax.onload = function() {
                    if (this.status == 200) {
                        let joke = this.responseText;
                        console.log(joke);
                        document.getElementById("joke").innerHTML = joke;
                    }
                }
                ajax.send();
            }
        </script>

    </main>
</body>

</html>