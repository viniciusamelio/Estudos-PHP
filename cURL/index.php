<?php
$cep = "08656040";
$link = "https://viacep.com.br/ws/$cep/json/unicode/";

$curl = curl_init($link);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response,true);

print_r($data);
