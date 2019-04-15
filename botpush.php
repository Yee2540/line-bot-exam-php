<?php



require "vendor/autoload.php";

$access_token = '3B46grW0q5HwDhGxosbwEHdXjC4NSC2rxzDC7LXNUNS5X26xFYLl/B0LWy+iG63YI4L6wggv5uwDzPzomMAa6I/srYk7pNuzG7uKo0R5BPZWDE/qbQBWkuP+3B3J2QNJ/RuOoRa4Fr+sYyXx2/JrCgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '402b40b53fba284bd46a2710b3798181';

$pushID = 'Udc8edea7b8a3e40e16dd9e269967b63b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







