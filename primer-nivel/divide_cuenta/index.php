<?php

/**
 * Reto #8 “Divide la cuenta”
 *
 * Instrucciones: vas con tus amigos a tu restaurante favorito y acuerdan dividir la cuenta. Para
 * facilitar las cosa pedirás al usuario que indique el total a pagar, entre cuantas personas se dvidirá
 * la cuenta, porcentaje de propina a incluir, un porcentaje de impuestos, total a pagar incluyendo
 * propina más impuestos y el total a pagar por cada persona.
 */

/**
 * Recibimos los datos por parte del usuario
 */

$total_sin_impuestos = readLine("Ingrese total a pagar sin impuestos: ");
$cantidad_personas = readLine("Ingrese entre cuantas personas van a pagar: ");
$propina = readLine("Ingrese porcentaje de propina: ");
$impuestos = readLine("Ingrese iva: ");

/**
 * Ralizamos la operacion correspondiente
 */
$total_con_impuestos = (($total_sin_impuestos * $propina) / 100) + (($total_sin_impuestos * $impuestos) / 100); //optenemos el porcentaje del la propina
$gran_total = ($total_sin_impuestos + $total_con_impuestos);
$pagar_persona = ($gran_total / $cantidad_personas);

/**
 * Imprimimos en pantalla
 */
echo "El total a pagar con propina e impuestos incluidos es: $" . $gran_total . "\n";
echo "Por persona pagan: $" . $pagar_persona;
