<?php

/**
 * Creamos funcion que suma números
 */

function sumaAutorizada($numero1, $numero2, $numero3, $numero4, $auto1, $auto2, $auto3, $auto4){
   /**
    * Sí el usuario no autorizó ningun número muestra mensaje
    */
    if($auto1 == 0 && $auto2 == 0 && $auto3 == 0 && $auto4 == 0){
       echo "<hr><h1>No se autorizo ningun número para realizar suma.</h1>";

   }else{
       
   
    /**
     * Si no se autorizó la suma los números valdran 0 respectivamente
     */
    if(!$auto1){
        $numero1 = 0;
    }
    if(!$auto2){
        $numero2 = 0;
    }
    if(!$auto3){
        $numero3 = 0;
    }
    if(!$auto4){
        $numero4 = 0;
    }
    /**
     * Realizamos la operación de la suma
     */
    $suma = ($numero1 + $numero2 + $numero3 + $numero4);
    echo "<hr><h1>Resulatado de la suma autorizada es: $suma </h1>"; //Imprimimos resultado en pantalla

    
   }

}