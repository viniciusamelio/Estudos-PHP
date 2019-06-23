<?php
if (isset($_COOKIE['historico_consultas'])) {
    $cookie = $_COOKIE['historico_consultas'];
    $cookie = json_decode($cookie);
    echo $cookie->nome_produto;
    echo "<br>";
    echo $cookie->valor;
}
