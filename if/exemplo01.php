<?php

$qualasuaidade = 15;
$idadecrianca = 12;
$idademaior = 18;
$idademelhor = 65;


if ($qualasuaidade < $idadecrianca) {
	echo "Criança!";
} elseif ($qualasuaidade > $idademaior) {
	echo "Adolescente";
} elseif ($qualasuaidade < $idademelhor ) {
	echo "Adulto";
} else {
	echo "Idoso";
}
echo "<br>";
echo ($qualasuaidade < $idademaior)?"Menor de Idade":"Maior de Idade";

?>