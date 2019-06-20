<?php
require_once("config.php");

$database = new database;

$user = $database->select("SELECT * FROM usuarios");

foreach($user as $usuario){
    echo $usuario['nome']."<br>";
    echo $usuario['login']."<hr>";
}
