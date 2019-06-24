<?php
function trataNome($nome)
{
    if (!$nome) {
        throw new Exception("Nenhum nome informado",11);
    }
    return ucfirst($nome);
}


try {
    trataNome("Vinicius");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "<br>Bloco executado";
}
