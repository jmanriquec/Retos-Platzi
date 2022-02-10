<?php

/**
 * Reto #2 “Hola… nombre y apellido:”
 *
 * Instrucciones: Ahora que sabemos incluir nombres, podemos agregar más datos. Intentemos con un
 * apellido para tener algo así: ``Hola, [nombre] [apellido]```
 */

#solicitamos al usuario ingresar nombre y apellidos

$nombre = readLine("Ingrese su nombre: \n");
$apellido = readLine("Ingrese su apellido: \n");

//imprimimos en pantalla

$saludo = "Hola";
$bienvenida = "binvenid@ a nuestro sitio web";

echo $saludo . ", " . $nombre . " " . $apellido . " " . $bienvenida;
