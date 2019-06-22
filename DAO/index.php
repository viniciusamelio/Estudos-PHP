<?php
require_once("config.php");

$usuarios = new usuarios;
$usuarios->selectID(20);
echo $usuarios;
echo "<hr>";

$lista = usuarios::list();
echo json_encode($lista);
echo "<hr>";
$lista = usuarios::search("Vinicius");
echo json_encode($lista,JSON_UNESCAPED_UNICODE);
