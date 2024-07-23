<?php

function obtener_hora(){
    $hora=date("H \y i."  );
    return $hora;
}
echo "!Hola! ¿Me podrías decir la hora?\n";
echo "¡Claro! Son las ".obtener_hora()."\n"; 

