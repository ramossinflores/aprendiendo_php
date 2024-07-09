<?php

// Manual de PHP - Precedencia: https://www.php.net/manual/es/language.operators.precedence.php
// Asociatividad de izquierda
$contador1= 1;
$contador2= 1;
$resultado1 = ++$contador1;  //  $resultado1 = ($contador1 + 1 = $contador1 )

//  $resultado2 = ($contador2 = 1 +$contador2)
$resultado2 = $contador2++;

echo $resultado1."\n";
echo $contador1."\n";
echo $resultado2."\n";
echo $contador2."\n";

echo 1 - 2 -3;
echo "\n"; 
// Sería escrito para ejemplificar la asociatividad izquierda, como sigue: 
echo  (1 - 2) -3;
echo "\n"; 

// Sin embargo, esta regla se puede cambiar la asociatividad a derecha:
echo  1 - (2 -3);
echo "\n"; 

// El signo de igualdad tiene una asociatividad de derecha :

$b = 3;
$c = 5;

//$a = $b = $c ;
$a = $c = $b ;

echo $a;

/*Experimento WTF de la clase de operadores lógicos
$resultado = $michis_4_patas and $michis_programan_con_PHP;
var_dump($resultado); //true
// El resultrado es verdadero por la presedencia. Se podría escribir como sigue para mayor claridad:
($resultado = $michis_4_patas) and $michis_programan_con_PHP;
// Es decir, el símbolo igual tiene mayor presedencia que el operador lógico. Por tanto, para obtener el resulado esperado, o falso, se debe escribir como:
$resultado = ($michis_4_patas and $michis_programan_con_PHP);
*/


