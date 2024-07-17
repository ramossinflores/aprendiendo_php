<?php
/* Ciclo for
for ($i = 0; $i < 10; $i++){
    echo $i."\n";
} 
for ($i = 10; $i > 0; $i--){
    echo $i."\n";
}

for ($i = 0, $j = 0; $i<10; $i++, $j += 2){
    echo "i = $i j =$j \n"; 
} */

// Ciclo for each */
$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);
/* 
foreach($tiendita_de_cafes as $cafe => $price){
    echo "El café $cafe cuesta $$price USD \n";
} */

// break y continue*/

/* foreach ($tiendita_de_cafes as $cafe => $price) {
    if ($cafe == "Latte"){
        echo "Encontramos a Latte! \n";
        break;
    echo "He encontrado al café $cafe \n";

    }
} */

foreach ($tiendita_de_cafes as $cafe => $price) {
    if ($cafe = "Recalentado"){
        continue;
        break;
    echo "El café $cafe es muy rico\n";

    }}