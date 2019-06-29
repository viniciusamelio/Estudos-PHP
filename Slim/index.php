<?php
require_once('vendor/autoload.php');

$app = new \Slim\Slim();
$app->get('/',function(){
    echo "Você está na Home!";
});
$app->get('/profile/:nome',function($nome){
    echo "Bem vindo, $nome!";
});
$app->run();