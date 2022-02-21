<?php

/**
 * Creamos función que multipica el número ingresado del 1 al 10
 */

 function tabla($numero){
     if($numero){ //verificamos que el número no este vacio
         echo "<br><hr><strong><p>Imprimiendo tabla del $numero</p></strong>"; 
        for ($i=1; $i <= 10; $i++) {  // imprimimos la tabla que proporciona el usuario 
            echo "$numero x $i = " . ($numero*$i) . "<br>"; //realizamos la operación
        }
     }else{
         echo "<br>El número no puede ser 0 ó estar vacio."; //si el número ingresado es 0 ó vacio le informamos al usuario
     }
 }