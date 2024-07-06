<?php

/* Pasando de string a int
$numerito = "5";
var_dump($numerito);

$numerito =(int) $numerito;

var_dump($numerito);*/ 

/* $dias = 5.89;
$dias=(int)$dias;
var_dump($dias);
echo "\n"; */

/* $banderita = 0;
$banderita =(bool)$banderita;
var_dump($banderita); */

// Reto de clase: ¿Qué tipo de datos son las siguientes variables?
/* //Fácil

$nombre = "Carlos"; //string
echo '$nombre es de tipo: '.var_dump($nombre);

$apellido = "Gómez";//string
echo '$apellido  es de tipo: '.var_dump($apellido);

$edad = 18; //int
echo '$edad  es de tipo: '.var_dump($edad);

$aprobado = true; //booleano
echo '$aprobado  es de tipo: '.var_dump($aprobado);

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //float
echo '$promedio es de tipo: '.var_dump($promedio);
$nombre_completo = $nombre . " " . $apellido; //string
echo '$nombre_completo  es de tipo: '.var_dump($nombre_completo);
$presento_examen = (bool) 1; //booleano
echo '$presento_examen  es de tipo: '.var_dump($presento_examen); */

//Avanzado

$numero_preguntas = 5 + "5"; //int
var_dump($numero_preguntas);
$numero_respuestas = "5" + 5; //int 
var_dump($numero_respuestas);
$promedio_maximo = $numero_respuestas / 1.0; //float
var_dump($promedio_maximo);
$michis = 3 + "5 michis"; //int
var_dump($michis);