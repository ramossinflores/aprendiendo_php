<?php
/* ¿De cuántas formas puedo ir de la tienda 1 a la tienda n sin retroceder en el camino? 
Es decir, siempre yendo de derecha a izquierda*/

do{
    $tiendita = readline ("¿A cuál tienda deseas ir?: ");
    $valorAnterior=0;
    $valorActual=1;
    if ($tiendita > 1){
        for ($i=2; $i <= $tiendita; $i++){
        $valorTemporal=$valorActual;
        $valorActual+=$valorAnterior;
        $valorAnterior=$valorTemporal;
        }
        echo "Tienes $valorActual caminos para llegar hasta la tienda $tiendita\n";
    }
    else if($tiendita = 1){
        echo "Estás en la tienda 1 o_O\n";
    }
    else{
        echo "Por favor, introduce un valor válido\n";
    };
    $continuar = readline("¿Deseas continuar?(s/n): ");
    }while($continuar == "s" or $continuar == "S"  );

