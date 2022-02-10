<?php

/**
 * Reto #4 - “I like turtles”
 *
 * Escribe un programa que pida al usuario ingrese su animal favorito, si coloca ‘Tortuga’, ‘tortuga’,
 * ‘TORTUGA’ o cualquier otra variante de la palabra entonces mostrar en pantalla “También me gustan las
 * tortugas”. En caso contrario mostrar el mensaje “Ese animal es genial, pero prefiero las tortugas”.
 */

//Solicitamos al usuario ingresar su animal favorito

$animal_favorito = readLine("Ingrese su animal favorito: ");
$procesa_animal = strtolower($animal_favorito);
$mi_animal_favorito = strtolower('tortuga');

if ($procesa_animal == $mi_animal_favorito) {
    echo "Tambien me gustan las Tortugas";
} else {
    echo "Ese animal es genial, pero prefiero las torutgas.";
}
