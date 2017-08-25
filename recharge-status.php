<?php

$url="http://localhost:8080/SakshAPIv1/Status?username=[username]&password=[password]&txid=[txid]";


$request_timeout = 60; // 60 seconds timeout

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);

$curl_error = curl_errno($ch);

$getserver= curl_getinfo($ch);

curl_close($ch);

$array= json_decode($output, true);

var_dump($array);



exit;

?>
