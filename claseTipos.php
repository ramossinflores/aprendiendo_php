<?php

/* Ejemplos para explicar el tipado débil

$numerito=0;
$numerito="23";
$numerito_nuevo=$numerito+2;
var_dump($numerito_nuevo);
var_dump($numerito);
echo "\n";

$numerito=10;
$numerito= $numerito+0.5;
var_dump($numerito);*/

$patatas = "10 patatas en el costal";
$cantidad_patatas= $patatas + 5;

echo $cantidad_patatas;
echo "\n";