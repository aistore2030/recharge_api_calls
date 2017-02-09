
<?php

$url="http://localhost:8090/httpapi/balance?email=loginemail@id.com&api_key=661633746223524";

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
//var_dump($array);
echo "Total Balance is ".$array[0]['total'];


exit;

?>
