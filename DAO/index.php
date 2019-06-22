<?php
require_once("config.php");

/*
$usuarios = new usuarios;
$usuarios->selectID(20);
echo $usuarios;
echo "<hr>";

$lista = usuarios::list();
echo json_encode($lista);
echo "<hr>";
$lista = usuarios::search("Vinicius");
echo json_encode($lista,JSON_UNESCAPED_UNICODE);
*/

//Insert
/*
$usuario = new usuarios;
$usuario->setNome('Gabriela Moraes');
$usuario->setLogin('gab.moraes');
$usuario->setSenha(md5('amorzinho'));
$usuario->insert();
*/

//update
/*
$usuario = new usuarios;
$usuario->selectID(26);
$usuario->update("Gabi Moraes","gabriela",md5("gabriela"));

echo $usuario;
*/

$usuario = new usuarios;
$usuario->selectID(27);
$usuario->delete();
