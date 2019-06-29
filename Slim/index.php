<?php
require_once('vendor/autoload.php');


$app = new \Slim\Slim();

use Rain\Tpl;

$config = array(
    "tpl_dir"       => "Templates/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$app->get('/',function(){
    $tpl = new \Rain\Tpl;
    //chamado o template Home
    $tpl->draw( "Home" );  
});

$app->get('/profile/:nome',function($nome){
    $tpl = new \Rain\Tpl;
    //Assinando a variável
    $tpl->assign( "name", $nome );

    //chamado o template Home
    $tpl->draw( "Profile" ); 
});
$app->run();