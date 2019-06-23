<?php
$link = "https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse['path']);
$file = fopen($basename,"w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?=$basename?>" alt="">
