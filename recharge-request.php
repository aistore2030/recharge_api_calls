<?php


$url="http://localhost:8080/SakshAPIv1/Recharge?username=[username]&password=[password]&recharge_circle=[recharge_circle]&recharge_operator=[recharge_operator]&recharge_number=[recharge_number]&amount=[amount]";

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
