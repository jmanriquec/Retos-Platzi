<?php

/**
 * Creamos funcion para crear recta númerica
 */

function rectaNumerica($limite, $recta){
    
    if($recta == 0){ //si la recta seleccionada es negativa
        echo "<br>Imprimiendo recta <strong>Negativa</strong><hr><br>";
        for ($i=$limite; $i >= 0; $i--) {
            echo "____";
            echo "-$i" ;
        }
    }else {
        echo "<br>Imprimiendo recta <strong>Positiva</strong><hr><br>";
        for ($i=0; $i <= $limite; $i++) { //si la recta seleccionada es positiva
            echo  $i;
            echo "_____";

        }
    }
}