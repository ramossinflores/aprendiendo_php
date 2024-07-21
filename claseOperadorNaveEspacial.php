<?php

/*Función usort — Ordena un array según sus valores usando una función definida por mí. 
usort(array &$array, callable $value_compare_func): bool
callback(mixed $a, mixed $b): int La función de comparación recibe dos parámetros (actual y siguiente del arreglo), que debe devolveer un int menor, igual o mayor que cero.
Función anónima - Función sin nombre, que se invoca a ella misma*/
$precios_cafes = [15, 12, 7, 6, 11, 10];
usort($precios_cafes, function($a, $b){
    return $a <=> $b; /* Si devuelve -1 el primer número es menor que el segundo, si devuleve cero son iguales, si devuelve 1 significa que el primer número es mayor que  el segundo */
}
);
var_dump($precios_cafes);