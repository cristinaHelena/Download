<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

//var_dump ($link);

$parse= parse_url($link);

//var_dump (basename($parse["path"]));

$basename = basename(basename($parse["path"]));

$file = fopen($basename,"w+");

fwrite($file,$content);

fclose($file);

?>

<img src="<?=$basename?>">