<?php
//inicializando
$array1 = [10, 300, 250];

$array1[] = "aaaa";
$array1[] = 500;
$array1[] = 1.30;


echo "<pre>";
print_r($array1);
echo "</pre>";



echo "Item Posicao 2: ".$array1[2];
echo "<br>";

$array1[2] = 940;
echo "Item Posicao 2 Alterado: ".$array1[2];
echo "<br>";
echo "<br>";

$ultima_posicao = sizeof($array1) -1;
echo "Ultima posicao: ".$ultima_posicao;
echo "<br>";

echo "Elemento posicao 1: " .$array1[$ultima_posicao];
echo "<br>";
echo "Elemento posicao11 1: " .$array1[ sizeof($array1)-1 ];

echo "<pre>";
print_r($array1);
echo "</pre>";

?>
