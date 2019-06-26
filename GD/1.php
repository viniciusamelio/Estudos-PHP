<?php
header("Content-Type: image/png");
$image = imagecreate(400,400);
$white = imagecolorallocate($image,253,253,253);
$black = imagecolorallocate($image,24,24,24);

imagestring($image,4,60,120,"Estudo PHP -  GD",$black);

imagepng($image);

imagedestroy($image);