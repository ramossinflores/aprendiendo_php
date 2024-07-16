<?php

/* ----------------------- if elseif -----------------------
$asientos_disponibles = 0;
$es_hijo_de_Tom_Holland = false;
$conoce_a_Tom_Stark = true;

if ($asientos_disponibles > 0){
    echo "Puedes ver la película";
}
else {
    echo "Lo sentimos. Te tocará expoliarte";
}
echo "\n"; 
# Si tienes una sola línea de código, se pueden omitir las llaves
if ($asientos_disponibles > 0)
    echo "Puedes ver la película";
else
    echo "Lo sentimos. Te tocará expoliarte";
echo "\n";

if ($asientos_disponibles > 0){
    echo "Puedes ver la película";
}
# Recuerda que la condición en el if es verdadera 
else if ($es_hijo_de_Tom_Holland){
    echo "No te creo, pero puedes ver la película";
}
else if ($conoce_a_Tom_Stark){
    echo "Bueno, te creo. Adelante";
}
else {
    echo "Lo sentimos. Te tocará expoliarte";
}
echo "\n"; */

// ----------------------- switch -----------------------

/*  Michi 1: 9
    Michi 2: 4 
    Michi 3: 3
    Michi 4: 7
    Michi 5: 1*/

$michi = 133; 


switch($michi){
    case 1:
        echo "Su número favorito es el 9";
        break;
    case 2:
        echo "Su número favorito es el 4";
        break;        
    case 3:
        echo "Su número favorito es el 3";
        break;        
    case 4:
        echo "Su número favorito es el 7";
        break;
    case 5:
        echo "Su número favorito es el 1";
        break;    
    default:
        echo "Ese michi no existe :(";        
}

