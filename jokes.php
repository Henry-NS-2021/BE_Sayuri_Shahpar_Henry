
$url = "http://api.serri.codefactory.live/random/";
$jokes = curl_get($url);
// var_dump($jokes);
$joke = json_decode($jokes);
echo $joke->joke;