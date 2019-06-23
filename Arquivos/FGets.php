<?php
/*
$filename = "usuarios.csv";
if (file_exists($filename)) {
    $file = fopen($filename,"r");
    $headers = explode(",",fgets($file));
    $data = array();
    while($row = fgets($file)){
        $datarow = explode(",",$row);
        $linha = array();
        for ($i=0; $i < count($headers) ; $i++) {
            $linha[$headers[$i]] = $datarow[$i];
        }

        array_push($data,$linha);
    }

    fclose($file);

    foreach ($data as $dado) {
        echo $dado['Id']."<br>";
        echo $dado['Nome']."<br>";
        echo $dado['Login']."<br>";
        echo "<hr>";
    }
}
*/
$filename = "images/Index-Banner.png";
$finfo = new finfo(FILEINFO_MIME_TYPE);
$tipo = $finfo->file($filename);
$base64 = base64_encode(file_get_contents($filename));
$base64encoded =  "data:$tipo;base64,".$base64;

?>
<img src="<?=$base64encoded?>" alt="">
