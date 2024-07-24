<?php

function clear() { // Función para limpiar la pantalla
    if(PHP_OS === "WINNT"){ // PHP_OS es una constante predefinida de PHP que indica el SO donde se está ejecutando: "Si PHP se ejecuta en Windows, entonces..."
        system("cls"); // system es una función quee ejecutar un programa externo y muestra su salida. en este caso cls es el comando limppiar consola para la CMD
    } else{
        system("clear"); // Para el resto de los SO, sea Linux o Mac, se limpia con clear.
    }
}

// Arreglo de posibles palabras que tomará el juego
$possible_words = [
    "ombligo", 
    "cachalote", 
    "armadillo", 
    "morcilla", 
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
    "selva", 
    "hectarea", 
    "musaraña", 
    "medieval"
];
define("MAX_ATTEMPS",7); // Constante que define el número de intentos 
do{ 
    echo "¡Juguemos al ahorcado! 😺\n==========================\n\nA continuación pensaré en una palabra secreta y tú tendrás 7 intentos para adivinarla.\nTe ayudaré dándote el número de letras que tiene.\n¿Listo?... ¡Empecemos!\n";
    $index = array_rand($possible_words,1); // array_rand, elige una key aleatoria del arreglo. En este caso, el arreglo no es asociativo, por lo tanto me arroja el valor del índice del elemento
    $chosen_word = $possible_words[$index]; // La palabra elegida será el elemento con índice aleatorio.
    $character_count = strlen($chosen_word); // Cuento la cantidad de caracteres en la palabra escogida al azar con la función strlen
    $secret_word = str_repeat("_",$character_count); // str_repeat repite el string que se indique en el primer parámetro, tantas veces como se establezca en el segundo.
    echo "\nHe elegido mi palabra. Tiene $character_count letras.\n\n". $secret_word."\n\n¡Suerte!\n\n"; 
            $attemps=1;
            while($attemps <= MAX_ATTEMPS) { 
            $chosen_character = strtolower(readline("Teclea una letra: "));
            $pattern="/[a-z]/"; // Creo una variable cuyo valor es un RegEx que recoge las letras de la a a la z, minúsculas
                // 1era validación de datos de entrada: Cantidad de caractéres. El usuario sólo puede ingresar un carácter.
                if(strlen($chosen_character)==1){  // Nuevamente, hago uso de la función strlen, pero esta vez para contar la longitud del string que ingreso el usuario
                    // 2da validación de datos de entrada: Sólo letras.     
                    if (preg_match($pattern, $chosen_character)==1){ // La función preg_match busca un patron en un string. El primero de sus parámetros debe ser el patrón que se requiere comparar, el segundo será el string contra el que se hará dicha comparación o búsqueda. Si el patrón se encuentra la función arrojará 1, de lo contrario entrega 0. En este caso, uso la variable donde guardé la RegEx y busco que el único caracter introducido por el usuario sea una letra.
                        $temporal_value= $secret_word; // Creo una variable temporal donde guardar el valor de secret_word antes de cambiar
                        for ($i=0; $i < $character_count ; $i++) {   // Este bucle recorre todas las posiciones del string comparándolas con la letra suministrada por el usuario
                            if ($chosen_word[$i] == $chosen_character ) { // Si existe alguna coincidencia entonces ...
                                $secret_word[$i]=$chosen_word[$i]; // Sustituye el valor del caracter en en secret_word por el valor de la letra coincidente. En secret_word y en chosen_word tienen la misma posición
                                    }
                        }
                            if ($temporal_value == $secret_word) { // Comparo la palabra secreta con el valor anterior. Si no ha cambiado, quiere decir que no se hha sustituido ningún caracter, por tanto hubo un intento fallido.
                                clear();
                                echo "Intento fallido 😿 Te quedan ".MAX_ATTEMPS-$attemps." intentos.\n"; // Le indico al usuario cuántos intentos le quedan restanto los intentos con el número máximo de intentos permitidos. 
                                ++$attemps; // Sumo un intento completado
                                sleep(2); // Pausa el juego, muestra la pantalla por 2 segundos
                                clear(); // Limpia pantalla
                            }
                            else {
                                clear();
                                echo "¡Bien! 😺 \n";   // Evidentemente, si el valor del entrada no es el mismo de salida, entonces hubo una modificación en la cadena: Es un acierto.
                            }
                            echo $secret_word."\n"; // imprimo la cadena con o sin modificaciones por acierto o desacierto, correspondientemente
                            $check_point = preg_match("/_/", $secret_word); // En cada ciclo estoy checkando que aún falten letras por descubrir. Cuando todas las letras sean reveladas, nno habrá ningún _ en secret_word. Así, busco este caracter con la funcion preg_match
                                    if ($check_point == 0) { // Cuando es 0, significa que no hay concidencias
                                        echo "¡Yey! La tienes 😸/\n"; 
                                        $attemps= MAX_ATTEMPS; // Para terminar el juego, le digo que los intentos alcanzan el máximo y así dejé el bucle 
                                    }     
                    }
                    // 2da validación de datos de entrada: Inválida. El usuario ha ingresado un carácter no alfabético.
                    else{
                        echo "Caracter inválido 😾 Debes ingresar una letra  \n";
                        sleep(2);
                        clear();
                    }
                }
                // 1era validación de datos de entrada: Inválida. El usuario ha ingresado más de un carácter.        
                else{
                    echo "Debes ingresar solo una letra 😾\n";
                    sleep(2);
                    clear();
                    }
        }                if($attemps = MAX_ATTEMPS){ // Si el usuario  alcanza el valor máximo de intentos, se le indica que ya se ha terminado el juego
                    echo "Lo siento. Se terminaron los intentos 😿 \n"; 
                    sleep(2);
                    clear();
                }
    $continuar=readline("¿Quieres jugar otra vez? Presiona s/S para continuar o cualquier tecla para salir.\n"); // Se sugiere si se desea o no continuar
    clear();
}while($continuar=="S" or $continuar =="s"); 
