<?php


$url="http://localhost:8080/httpapi/recharge-request?email=loginemail@id.com&api_key=k&recharge_operator=A&recharge_circle=10&recharge_number=9935457781&amount=10";

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

// response will be success,  pending  in case of succesfully process in all other resposes will be for failure plz note in pending cases sytem will automatically refund  after dispute


exit;

?>
