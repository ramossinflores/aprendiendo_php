<?php

/*  Obteniendo los parámetros de entrada
    function es_estudiante_legend($platzi_rank){
    if($platzi_rank >= 20000){
        echo "¡Eres un Estudiante Legend!\n";
    }
    else{
        echo "Lo sentimos, aún no alcanzas el Nivel Legend\n";
    }
    readline ("Por favor, introduce la cantidad de puntos acumulados en tu Platzi Rank: ");
    es_estudiante_legend($student_rank);    
};
*/

/*Haciendo que se ejecute indefinidamente
do
{
    $student_rank = (int) readline ("Por favor, introduce la cantidad de puntos acumulados en tu Platzi Rank: ");
    es_estudiante_legend($student_rank);
}while(true);
 */

/* Valor por defecto de un parámetro 
function suma($a =  0, $b = 0){
    echo "La suma de $a + $b es ".($a + $b)."\n";
}
suma(7, 9);
suma(33,5);
suma(69,455);
suma(14); */

/*Array unpacked (también es válido usar array_merge)
$array1=[1,2,3];
$array2=[4,5,6];

$result=[ ...$array1, ...$array2];
var_dump($result);
echo "\n";*/

/* Pasando valores desempaquetados de un arreglo a una función
function sum($a, $b){
    echo "La suma de $a + $b es ".($a + $b)."\n";
}
$numbers =[23,556];
$numbers2 =[73,78];
sum(...$numbers);
sum(...$numbers2); 
*/

/* Aceptar una catidad indefinida de parámetros. Los parámetros se convierten en un arreglo
function infinitesum(...$numbers){
    var_dump($numbers);
}
Por tanto, se pueden manipular como tal
function infinitesum(...$numbers){
    $sum=0;
    foreach ($numbers as $number => $value) {
        $sum+=$value;
    }
    echo "The total sum is $sum \n";
}

infinitesum(8,9,555,66,22);*/
function freddy(){
    $numero_aleatorio = rand(1, 4);
    $frase_de_freddy ="";
    switch($numero_aleatorio){
    case 1:
        $frase_de_freddy= "Nunca pares de aprender.\n";
        break;
    case 2:
        $frase_de_freddy= "Las empresas no son familia.\n";
        break;
    case 3:
        $frase_de_freddy= "La tecnología es el futuro.\n";
        break;                
    case 4:
        $frase_de_freddy= "Me encanta PHP.\n";
        break;
        }  
    return $frase_de_freddy;              
    } ;

    echo freddy();