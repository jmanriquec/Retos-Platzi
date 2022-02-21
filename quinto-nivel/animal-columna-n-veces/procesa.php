<?php

/**
 * Creamos función que realiza proceso de mostrar animal ingresado en columna n veces
 * 
 */

function animalFavorito($animal, $repetir){
    if($animal){
        for ($j=0; $j < $repetir; $j++) { //Repetimos la palabra las veces que el usuario lo requiera
            echo "<br>";
            for ($i=0; $i < strlen($animal); $i++) { //repetimos la palabra en columna
                echo $animal[$i] . "<br>"; //imprimimos la palabra en columna
            }
        }
        
    }

}
