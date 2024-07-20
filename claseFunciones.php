<?php

function get_pokemon(){
    $numero_aleatorio = rand(1,6);
    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Bulbasaur";
            break;
        case 4:
            echo "Squirtle";
            break;
        case 5:
            echo "Pidgeotto";
            break;    
        default:
            echo "No hay pokemon para tí :(";
    }
}

get_pokemon();
echo "\n";

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
    echo "\n";
}
