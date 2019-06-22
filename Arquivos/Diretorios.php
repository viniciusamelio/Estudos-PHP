<?php
//mkdir() - cria Diretório
//is_dir() - verifica se o Diretório existe
//rm_dir() - deleta o diretório
 $name = "images";

 if (!is_dir($name)) {
    echo "Diretório {$name} criado!";
    mkdir($name);
}else{
    //rmdir($name);
    echo "Diretório existente: ".DIRECTORY_SEPARATOR.$name;
}


echo "<hr>";

$images = scandir($name);
$data = array();
foreach($images as $image){
    if (!in_array($image,array(".",".."))) {
        $filename = "images/$image";
        echo "<img height='500px' src='images/$image'><br>";
        $info = pathinfo($filename);
        $info['size'] = filesize($filename);
        $info['modified'] = date("d - m - Y H:i:s",filemtime($filename));
        $info['url'] = "http://localhost/cursophp/arquivos/".$filename;
        array_push($data,$info);
    }
}

echo json_encode($data);
