<?php
include("Connection.php");
$nome = "Arthur Pendragon Von Izenberg"; $id = 2;
$statement = $connection->prepare("UPDATE usuarios set nome = :nome where id = :id");
$statement->bindParam(":nome",$nome);
$statement->bindParam(":id",$id);
$statement->execute();
