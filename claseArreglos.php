<?php
/* Primera forma
$edades = [20, 18, 40];
echo $edades[0]."\n"; */

/* Segunda forma
$edades = array(20, 18, 40);
echo $edades[1]."\n";  */

/* Arreglos Asociativos 
$edades = array(
    "Laura" => 95,
    "Mr. Michi" => 10,
    "Mr. Merequetengue" => 9
);
echo "La edad de Mr. Michi es ". $edades["Mr. Michi"] ."\n";*/

/* Acceder a elementos
$cafes = array(
    "cappuchino" => 50,
    "latte" => 49,
    "americano" => 70
);

echo "El precio del café americano es de {$cafes['americano']}";
echo "El precio del café americano es de {$cafes["americano"]}"; */

$personas = array (
    "Carlos" => array (
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr. Michi" => array (
        "edad" => 6,
        "apellido" => "Michisancio"
    )
    );

    echo "La información de Mrs. Michi es: \nEdad: ".$personas["Mr. Michi"]["edad"]."\n"."Apellido: ".$personas["Mr. Michi"]["apellido"];