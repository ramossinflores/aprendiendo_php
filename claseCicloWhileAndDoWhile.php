<?php
/* Ciclo while
$i=1;
while ($i<=10){
    echo "Esta es la iteracíon $i \n";
    $i++;
} */

// Ciclo do .. while 
$usernames = ["chanchito123", "Michi", "Melenon2020"];
do{
    $username = readline ("Por favor ingresa tu nuevo nombre de usuario: \n");
}while (in_array($username, $usernames)); // Esta función arroja verdadero o falso dependiendo si el valor del primer parámetro está en la matriz que se indica como segundo parámetro
