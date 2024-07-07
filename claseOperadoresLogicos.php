<?php
$michis_felinos= true;
$michis_4_patas=true;
$michis_vuelan=false;
$michis_programan_con_PHP=false;

//And
# var_dump($michis_felinos && $michis_4_patas);

//Or
# var_dump($michis_vuelan || $michis_4_patas);

//Not
#var_dump( ! $michis_4_patas);

/*Experimento WTF
$resultado = $michis_4_patas and $michis_programan_con_PHP;
var_dump($resultado);
echo "\n";*/

//Reto
$es_un_michi_grande=true;
$le_gusta_comer=true;
$sabe_volar=false;
$tiene_2_patas=false;

//¿Cuál es el resultado?
var_dump($es_un_michi_grande && $le_gusta_comer); //true 
var_dump($es_un_michi_grande || $sabe_volar); //true
var_dump($sabe_volar || $tiene_2_patas); //false
var_dump(!$le_gusta_comer); //false
var_dump(!$le_gusta_comer || $es_un_michi_grande); //true




