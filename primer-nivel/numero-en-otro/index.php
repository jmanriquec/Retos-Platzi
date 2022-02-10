<?php

/**
 * Reto #11 “Cuantas veces un número en otro”
 *
 * Instrucciones: pide al usuario ingresar un número mayor a 1000 y otro menor a 100. Indica de una forma
 * sencilla de entender al usuario cuantas veces cabe el número menor a 100 en el número mayor a 1000
 */

/**
 * Pedimos al usuario ingresar dos numeros
 */

$mayorquemil = readLine("Ingrese un número mayor a 1000 ");
$menorquecien = readLine("Ingrese un número menor a 100 ");

/**
 * realizamo la comparación de los números ingresados
 */

if ($mayorquemil > 1000 && $menorquecien < 100) {
    $numero_veces = $mayorquemil / $menorquecien;
    echo "El número " . $menorquecien . " esta " . $numero_veces . " veces en " . $mayorquemil;
} else {
    echo "Ocurrio un error el procesar, por favor verifica y vuelve a intentar";
}
