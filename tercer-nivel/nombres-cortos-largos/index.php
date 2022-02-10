<?php
/**
 *
 * Reto #6 Nombres cortos y largos
 *
 * Ya sabemos trabajar con nombres ¿pero qué pasa si cumple ciertas cualidades?
 * Tu usuario ingresará su nombre, si tiene una longitud mayor a 5 caracteres mostrarás un saludo con su
 * nombre en pantalla. Si tiene menos de 5 caracteres, pedirás su apellido, mostrarás el saludo con
 * nombre y apellido. En ambos casos deberás mostrarlos con mayúscula inicial.
 */

#Solicitamos al usuario ingresar el nombre

$nombre = readLine("Ingrese su nombre: \n");

#verificamos la longitud de los carácteres que tiene

$caract = strlen($nombre);

#Inicial nombre en mayúscula

$nombre = ucwords($nombre);

/**
 * Si carácteres es mayor que 5 entonces mostrara saludo con el nombre
 */
if ($caract > 5) {
    echo "Hola, " . $nombre;
} else {
    #solicitamos al usuario ingresar su apellido

    $apellido = readLine("Ingrese su apellido: \n");

    #Inicial apellido en mayúscula
    $apellido = ucwords($apellido);

    #Imprimimos nombre y apellido en pantalla
    echo "Hola, " . $nombre . " " . $apellido;

}
