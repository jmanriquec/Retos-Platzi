<?php

/**
 * Reto #5 - Calcular volumen de un cilindro
 *
 * Pide a tu usuario que indique el radio y la profundidad de un cilindro. Después aplica la fórmula
 * correspondiente para calcular el volumen del cilindro y reduce el resultado a un solo decimal.
 */

 #Creamos la funcion encargada de calcular el volumen del cilindro

function volumenCilindro($radio, $altura)
{
    $volumen = pi() * $altura * ($radio * $radio);
    $volumen = round($volumen, 2);
    echo "Volumen es. " . $volumen . " cm3";
}
