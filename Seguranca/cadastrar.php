<?php

$email = $_POST['email'];

var_dump($email);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query(array(
    "secret"=>"6LfqT6sUAAAAADzD2vVSvkFY9MIVOcZCpiSfLmbX",
    "response"=>$_POST['g-recaptcha-response'],
    "remoteip"=>$_SERVER['REMOTE_ADDR']
)));
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$recaptcha = json_decode(curl_exec($curl),true);
curl_close($curl);


if($recaptcha["success"] === false){
    header("location: Recaptcha.php");
}else{
    echo "deu bom!";
}