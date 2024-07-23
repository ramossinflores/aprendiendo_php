<?php

$possible_words = [
    "ombligo", 
    "cachalote", 
    "armadillo", 
    "murcielago", 
    "ganster", 
    "montaña", 
    "meandros", 
    "boreal", 
    "higado", 
    "alunizaje", 
    "solsticio", 
    "equinoccio", 
    "maremoto", 
    "nebulosa", 
    "huracan", 
    "sedimentario", 
    "selvatico", 
    "hectareas", 
    "musaraña", 
    "medievales"
];
/* define("max_attemps",7);
do{ */
    echo "¡Juguemos al ahorcado!\n==========================\n\nA continuación pensaré en una palabra secreta y tú tendrás 7 intentos para adivinarla.\nTe ayudaré dándote el número de letras que tiene.\n¿Listo?... ¡Empecemos!\n";
    $index = array_rand($possible_words,1);
    $chosen_word = $possible_words[$index];
    $character_count = strlen($chosen_word);
    echo "\nHe elegido mi palabra. Tiene $character_count letras.\n ¡Suerte!";
        for ($i=1; $i <= 7 ; $i++) { 
            $chosen_character = readline("Intento $i. Teclea una letra: ");
            $pattern="[A-z]";
                if(strlen($chosen_character)==1){
                    if (preg_match($pattern, $chosen_character)==1){
                        
                    }else{
                        echo "Caracter inválido. Debes ingresar una letra.\n";
                    }
                }else{
                    echo "Debes ingresar solo una letra.\n";
                }

        };
    
    
/*     $continuar=readline("¿Quieres jugar otra vez? Presiona s/S para continuar o cualquier tecla para salir.");
}while($continuar=="S" or $continuar =="s"); */