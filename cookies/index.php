<?php
$carrinho = array(
    "nome_produto" => "notebook",
    "valor" => 1850.00
);

setcookie("historico_consultas",json_encode($carrinho),time()+3600);
