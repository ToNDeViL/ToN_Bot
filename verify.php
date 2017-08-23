<?php
$access_token = 'UcDhhh3ZDokGUykisqwIm/FGHd+vOb5Em+HF/wH5+yT5ya0BrZLpRrZEUeQqs3OeseMQdLrvYObBVF4eh9FoPvOZIgcA9XBlOdtFGcuzFjiTMFabbcZhuL9W2PQJxyx5SkL89EG3WusaoeTOsoYxiwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
