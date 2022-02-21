<?php
/**
 * Creamos la función que nos realizará la cuenta regresiva
 */

function cuentaRegresiva($numero){
    if($numero){ //Validamos que número no sea vacio
        echo "<p>Iniciando cuenta regresiva en ... </p>";
        for ($i=$numero; $i >= 0 ; $i--) { //iniciamos la cunenta regresiva
            echo $i . "<br>";
        }

    }else{
        echo "<br>No haz ingresado un valor valido."; //si es vacio mostramos mensje al usuario
    }
}