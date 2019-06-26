<?php


$image = imagecreatefromjpeg("certificado.jpg");

$white = imagecolorallocate($image,253,253,253);
$black = imagecolorallocate($image,24,24,24);

$aluno = utf8_decode("Vinicius Amélio");
$curso = utf8_decode("Banco de dados não relacionais");

imagestring($image,5,450,150,"Certificado",$black);
imagestring($image,5,440,350,"$aluno",$black);
imagestring($image,3,440,370,"$curso - ".utf8_decode('concluído em:').date("d-m-Y"),$black);

header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);
