<?php

$frase = "A repeticao é a mãe da retenção, mas que frase de merda ein cara";

$q = strpos($frase, "da");

//var_dump($q);

$texto = substr($frase, 0, $q);

//var_dump($texto);

print $texto;
echo "<br>";
echo $texto;
?>