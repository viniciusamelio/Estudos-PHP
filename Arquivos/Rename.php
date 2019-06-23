<?php
$folder1 = "p01"; $folder2 = "p02";
if (!is_dir($folder1)) {
    mkdir($folder1);
}
if (!is_dir($folder2)) {
    mkdir($folder2);
}
$filename = "Read.txt";
if(!file_exists($folder1.DIRECTORY_SEPARATOR.$filename))
{
    $file = fopen($folder1.DIRECTORY_SEPARATOR.$filename,"w+");
    fwrite($file,date("d-m-Y H:i:s"));
}

if (file_exists($folder1.DIRECTORY_SEPARATOR.$filename)) {
    rename($folder1.DIRECTORY_SEPARATOR.$filename, $folder2.DIRECTORY_SEPARATOR.$filename);
}
