<?php
include("Connection.php");
$id = 3;

$statement = $connection->prepare("delete from usuarios where id=:id");
$statement->bindParam(":id",$id);
$statement->execute();
