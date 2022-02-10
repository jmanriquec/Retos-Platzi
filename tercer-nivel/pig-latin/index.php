<?php

/**
 *
 * Reto #7 ¡Hablemos Pig Latin! (Puerco Latino) 🐷
 *
 * Solo una cosa, pide a tu usuario que ingrese una palabra y tradúcela a Pig Latin.
 *
 * Espera ¡¿qué?!
 * PuercoLatino es como el idioma de la “efe”, donde cambiamos las palabras bajo ciertas condiciones. En este caso será así:
 *
 * La primer consonante de una palabra se pasa al final y se agrega la sílaba “ay”.
 * Si una palabra inicia con vocal, se agrega “way” al final.
 *
 * Ejemplos:
 *
 * Platzi 👉 Latzipay
 * Abeja 👉 Abejaway
 */

#declaramos array con las vocales

$vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

#Declaramos array con las consonantes

$consonantes = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "ñ", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "Ñ", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z");

#Solicitamos al usuario ingresar una palabra

$palabra = strtolower(readLine("Ingrese una palabra sin acento: \n"));

#Quitamos los espacios que hayan dentro de la palabra
$palabra = str_replace(" ", "", $palabra);

#convertimos el string en array
$array_palabra = str_split($palabra);

#verificamos si la primera letra es consonante o vocal

for ($v = 0; $v < count($vocales); $v++) {
    if ($array_palabra[0] == $vocales[$v]) {
        #Si comienza por vocal entonces...
        $add_way = "way";

        #imprimimos en pantalla
        echo ucfirst($palabra) . $add_way;
    }
}

for ($c = 0; $c < count($consonantes); $c++) {
    if ($array_palabra[0] == $consonantes[$c]) {
        #Quitamos la primera letra
        $del_letra = str_replace($palabra[0], "", $palabra);
        $add_ay = "ay";

        #imprimimos en pantalla
        echo ucfirst($del_letra) . $palabra[0] . $add_ay;

    }
}
