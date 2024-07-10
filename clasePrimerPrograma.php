<?php


/* 1er programa: ¿Qué hora es?

$segundos = readline("Ingresa el tiempo en segundos: ");
$horas = (int)($segundos /3600);
$segundos = $segundos % 3600;
$minutos = (int)($segundos /60);

echo "Son $horas horas, $minutos minutos y $segundos segundos.\n";*/

// RETO: Convertir horas, minutos y segundos a solo segundos 
$horas = readline("Ingresa las horas: ");
$minutos = readline("Ingresa los minutos: ");
$segundos =  readline("Ingresa los segundos: ");

$totalSegundos = $horas*3600 + $minutos*60 + $segundos;

echo "$horas horas, $minutos  minutos y $segundos segundos, equivalen a $totalSegundos segundos.\n";
