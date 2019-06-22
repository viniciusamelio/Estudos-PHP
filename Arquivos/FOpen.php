<?php

date_default_timezone_set("America/Sao_Paulo");
//$file = fopen("log.txt","a+");

//fwrite($file,"Última modificação em:".date("d-m-Y H:i:s")."\n");

//fclose($file);

require("config.php");
$usuario = new usuarios;
$usuarios = $usuario->list();
$headers = array();

foreach($usuarios[0] as $key=>$value ){
    array_push($headers,ucfirst($key));
}
$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",",$headers)."\r\n");

foreach($usuarios as $row){
    $data = array();
    foreach($row as $key=>$value){
        array_push($data,$value);
    }
    fwrite($file,implode(",",$data) . "\r \n");
}

fclose($file);
