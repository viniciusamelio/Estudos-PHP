<?php
//unlink - deleta arquivos.

/*
$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt");

echo "arquivo removido com sucesso!";
*/

if(!is_dir("dir")){
    mkdir("dir");
}

foreach (scandir("dir") as $item) {
    if(!in_array($item,array(".",".."))){
        unlink("dir/".$item);
    }
}

echo "Arquivos deletados!";
