<?php
$edades = [18, 22, 40, 34];

/* count: Cuenta los elementos del array, el tammaño del arreglo
echo count($edades)."\n";*/

/* array_push:. Agrega elementos al final del arreglo
array_push($edades, 13, 6);
var_dump($edades);*/

/* is_array: Permite determinar si una variable es un arraglo o no
$esto_no_es_un_array="Michi";
var_dump(is_array($esto_no_es_un_array));*/

/* explode: Convierte un string en un array
$lista_de_frutas = "fresa,cereza,manzanas,bananas";
$array_frutas = explode(",", $lista_de_frutas);
var_dump($arry_frutas);*/

/* implode: Lo contario, pasa un array a string*/
$array_frutas = ["fresa","cereza","manzanas","banana"];
$lista_de_frutas = implode(",", $array_frutas);
var_dump($lista_de_frutas);
