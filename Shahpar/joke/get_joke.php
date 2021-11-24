<?php

require_once '../components/rest.php';


    $url = "http://api.serri.codefactory.live/random/";
    $jokes = curl_get($url);
    // var_dump($jokes);
    $jokeDecode = json_decode($jokes);
    echo $jokeDecode -> joke;