<?php


$image = imagecreatefromjpeg("certificado.jpg");

$white = imagecolorallocate($image,253,253,253);
$black = imagecolorallocate($image,24,24,24);

$aluno = utf8_decode("Vinicius Amélio");
$curso = utf8_decode("Banco de dados não relacionais");

imagettftext($image,32,0,320,250,$black, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR.
"Bevan-Regular.ttf","Certificado");
imagettftext($image,32,0,375,350,$black, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR.
"Playball-Regular.ttf","$aluno");
imagestring($image,3,440,370,"$curso - ".utf8_decode('concluído em:').date("d-m-Y"),$black);

header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);
