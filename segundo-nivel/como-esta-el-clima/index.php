<?php
/**
 * Reto #5 - ¿Cómo está el clima?
 *
 * Crea un programa que pregunte al usuario si está lloviendo, en caso de responder “sí” pregunta si está
 * haciendo mucho viento y si responde “sí” nuevamente muestra un mensaje indicando que hace mucho viento
 * para salir con una sombrilla. En caso contrario, anima al usuario a que lleve una sombrilla. Para el
 * caso de responder “no” en la primer pregunta, entonces solo desea un bonito día.
 * Considera que las respuestas pueden pasarse a minúsculas para evitar posibles errores.
 */

#Preguntamos al usuario. ¿Está lloviendo?
$lloviendo = strtolower(readLine("¿Está lloviendo?. por favor contesta Si ó No \n "));

#Procesamos los datos

if ($lloviendo == 'no') {
    echo "Deseo que tengas un bonito día :)";
} else {

    #Preguntamos al usuario. ¿Está haciendo mucho viento?
    $viento = strtolower(readLine("¿Está haciendo mucho viento?. por favor contesta Si ó No \n "));

    if (($lloviendo == 'si' || $lloviendo == 'sí') && ($viento == 'si' || $viento == 'sí')) {
        echo "Esta haciendo mucho viento para llevar sombrilla";
    } else if ($viento == 'no') {
        echo "Puedes llevar sombrilla, es seguro";
    }
}
