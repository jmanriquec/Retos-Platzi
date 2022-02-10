<?php

/**
 * Reto #1 Longitud del string
 *
 * Pide a tu usuario que ingrese el nombre de su curso favorito, obtén la longitud de ese string y
 * muéstralo en pantalla.
 */

$curso_favorito = readLine("Ingrese el nombre de su curso favorito \n");
$longitud = strlen($curso_favorito);

echo "Haz elegido " . $curso_favorito . " como curso favorito, esta cadena de texto tiene " . $longitud . " carácteres.";
