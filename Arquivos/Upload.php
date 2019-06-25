<?php


//Verifica se a requisição POST está sendo feita na página
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Adiciona o arquivo enviado a variável
    $file = $_FILES['arquivo'];
    //Pega o caminho do arquivo
    $path = $_FILES['arquivo']['name'];
    //Pega a extensão do arquivo
    $extension = pathinfo($path,PATHINFO_EXTENSION);
    //Se o arquivo apresentar um erro, é exibido um erro
    if ($file['error']) {
        throw new Exception("Error:".$file['error']);
        }

    $directory = "uploads";
    if (!is_dir($directory)) {
        mkdir($directory);
    }
    if ($extension  == 'png' or $extension == 'jpeg' or $extension == 'jpg') {

        if (move_uploaded_file($file['tmp_name'],$directory.DIRECTORY_SEPARATOR.random_int(0,999).$file['name'])) {

            echo "Upload realizado com sucesso!";
        }else{
            throw new Exception("Erro ao realizar upload!");
        }

    }else{
        echo "Arquivo não está entre as extensões permitidas!";
    }

}
?>

<!DOCTYPE html>
<html lang="pt-BR" >
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" enctype="multipart/form-data" method="post">
            <input type="file" name="arquivo"><br>
            <input type="submit" accept="jpeg"  name="enviar" value="Enviar arquivo">
        </form>

    </body>
</html>
