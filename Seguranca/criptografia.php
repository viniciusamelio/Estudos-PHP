<?php

define('SECRET',pack('a16','senha'));
define('SECRET_II',pack('a16','senha'));

$data = [
    "nome"=>"Vinicius"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_II
);

echo $openssl;

echo "<hr>";

var_dump($string = openssl_decrypt($openssl,'AES-128-CBC',SECRET,0,SECRET_II));

$data = md5($data['nome']);
echo "<hr>";
var_dump($data);