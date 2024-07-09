<?php
$a = 5; 
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

/* == Igual (NO compara tipos)

var_dump( $a == $b );
var_dump( $a == $b2 ); */

/* === Idéntico (SI compara tipos)
var_dump( $a === $b );
var_dump( $a === $b2 );*/

/* != Diferente (NO compara tipos)

var_dump( $a != $b );
var_dump( $a != $b2 );*/ 

/* !== Diferente (SI compara tipos)

var_dump( $a !== $b );
var_dump( $a !== $b2 );*/

/* < Menor que 
var_dump( $a < $b);
var_dump( $c < $b);
var_dump( $d < $b);*/

/* > Mayor que 
var_dump( $a > $b);
var_dump( $c > $b);
var_dump( $d > $b);*/

/* >= Mayor o igual que 
var_dump( $a >= $b);
var_dump( $c >= $b);
var_dump( $d >= $b);*/

/* <= Menor o igual que 
var_dump( $a <= $b);
var_dump( $c <= $b);
var_dump( $d <= $b);*/

/* <=> Nave espacial (Devuelve -1 si el número que está a la izquierda es menor que el de la derecha. Si son iguales devuelve 0. si el que está a la izquierda 
es mayor que el que está a la derecha devuelve 1)
echo  ( 2 <=> 1 ). "\n";*/


// ?? Fusión de null

$edad_de_Pepito = 23;

echo $edad_de_Juanito ?? $edad_de_Pepito. "\n";