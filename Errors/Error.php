<?php
function error_handler($code,$message,$file,$line)
{
    echo "<h2>Error $code - $message</h2><br><h4>Arquivo: $file<br>Linha:$line</h4>";
}

set_error_handler("error_handler");

echo $trab;

echo "<hr>";
