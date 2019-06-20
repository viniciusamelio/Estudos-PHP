<?php

$nome = "Vinicius Amélio";
$login = "vinicius";
$senha = md5("123");

function insert ($nome,$login,$senha){
    include("Connection.php");
    $sql = "INSERT INTO usuarios values(null,:nome,:login,:senha)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(":nome",$nome);
    $statement->bindParam(":login",$login);
    $statement->bindParam(":senha",$senha);
    $statement->execute();
}


insert($nome,$login,$senha);
