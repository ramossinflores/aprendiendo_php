<?php

$Michis = array(
    "Michi1" => array(
        "nombre" => "MsBombon", 
        "ocupación" => "Especialista en pereza",
        "color" => "negro y blanco",
        "comidas" => array(
            "favoritas" => ("atún, popcorn, pollito"),
            "detestadas" => ("helado, brócoli, ajo")
        )
        ),
    "Michi2" => array(
        "nombre" => "MsBurbuja", 
        "ocupación" => "Autolimpiadora profesional",
        "color" => "naranja",
        "comidas" => array(
            "favoritas" => ("hígado, jamón, salchichas"),
            "detestadas" => ("lentejas, manzanas, gominolas")
        )
        ),      
    "Michi3" => array(
        "nombre" => "MsBellota", 
        "ocupación" => "Maulladora senior",
        "color" => "gris con rayitas",
        "comidas" => array(
            "favoritas" => ("huevos, patatas fritas, yogurt"),
            "detestadas" => ("pasta, queso, ron")
        )
        )  
        );
//var_dump($Michis);
// echo "Las comidas favoritas de Mrs Bellota son: ".($Michis["Michi3"]["comidas"]["favoritas"]);
$ms_burbuja = $Michis["Michi2"];
// var_dump($ms_burbuja);
echo "El color de Ms. Brubuja es ".$ms_burbuja["color"];
?>