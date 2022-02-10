<?php
/**
 *
 * Reto #7 - Mensajes opcionales
 *
 * Crearás un un script para el que el usuario indicará un número entre 1 y 6. Como respuesta se le
 * brindará un mensaje según el número leido:
 *
 * 1 - “Hoy aprenderemos sobre prorgamación”
 * 2 - “¿Qué tal tomar un curso de marketing digital?
 * 3 - “Hoy es un gran día para comenzar a aprender de diseño”
 * 4 - ¿Y si aprendemos algo de negocios online?
 * 5 - “Veamos un par de clases sobre producción audiovisual”
 * 6 - “Tal vez sea bueno desarrollar una habilidad blanda en Platzi”
 * En caso indicar un número distinto, pedir al usuario que ingrese uno en el rango válido.
 */

$numero = (int) readLine("Ingrese un número entre 1 y 6 \n");

if ($numero == 1) {
    echo "Hoy aprenderemos sobre prorgamación. ";
} else if ($numero == 2) {
    echo "¿Qué tal tomar un curso de marketing digital?. ";
} else if ($numero == 3) {
    echo "Hoy es un gran día para comenzar a aprender de diseño. ";
} else if ($numero == 4) {
    echo "¿Y si aprendemos algo de negocios online?. ";
} else if ($numero == 5) {
    echo "Veamos un par de clases sobre producción audiovisual. ";
} else if ($numero == 6) {
    echo "Tal vez sea bueno desarrollar una habilidad blanda en Platzi. ";
} else {
    echo ("Ingresaste una opcion invalida, por favor verifica e intenta de nuevo. ");
}
