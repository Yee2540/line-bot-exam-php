<?php


$access_token = '3B46grW0q5HwDhGxosbwEHdXjC4NSC2rxzDC7LXNUNS5X26xFYLl/B0LWy+iG63YI4L6wggv5uwDzPzomMAa6I/srYk7pNuzG7uKo0R5BPZWDE/qbQBWkuP+3B3J2QNJ/RuOoRa4Fr+sYyXx2/JrCgdB04t89/1O/w1cDnyilFU=';

$userId = 'Udc8edea7b8a3e40e16dd9e269967b63b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

