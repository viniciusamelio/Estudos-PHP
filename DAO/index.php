<?php
require_once("config.php");

$usuarios = new usuarios;
$usuarios->selectID(20);
echo $usuarios;
