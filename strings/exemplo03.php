<?php

$entrada = "este teste serve para provar que sempre ha uma forma mais facil de resolver as coisas irmao";

$entrada = str_replace("a", "4", $entrada);
$entrada = str_replace("e", "3", $entrada);
$entrada = str_replace("i", "1", $entrada);
$entrada = str_replace("o", "0", $entrada);
$entrada = str_replace("s", "$", $entrada);

echo $entrada;

?>
