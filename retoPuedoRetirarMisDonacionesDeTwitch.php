<?php

/*echo "Ingresa tu usuario: \n";
fscanf(STDIN, "%s", $usuario); # El formato para leer una cadena es %s.
echo  "Ingresa el valor acumulado de donaciones :\n";
fscanf(STDIN, '%d\n', $donaciones); // '%d\n' lectura de variables por teclado de numeros reales*/


// También se puede realizar la entrada de datos con la función readline(), de la siguiente manera 


$donaciones = readline("Por favor, ingresa el valor acumulado de donaciones: ");
if ($donaciones >= 100)
    echo "Puedes retirar tu dinerito. ¡Yey! :) \n";
else
    echo "Lo siento. Aún no tienes suficientes donaciones :( ¡Échale ganas! \n";