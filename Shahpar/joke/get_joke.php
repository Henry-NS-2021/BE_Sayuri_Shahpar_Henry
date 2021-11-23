<?php

require_once '../components/rest.php';

displayJoke();

function displayJoke()
{
    return $url = "http://api.serri.codefactory.live/random/";
    $jokes = curl_get($url);
    // var_dump($jokes);
    $joke = json_decode($jokes);
    return $joke;
}

?>