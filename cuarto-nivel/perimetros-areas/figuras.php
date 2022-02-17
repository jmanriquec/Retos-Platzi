<?php require_once "procesa-datos.php";

if (isset($_POST{'next'})) { //se presionamos el boton del formulario nos dirige a ingresar los valores de la figura seleccionada
    validaFiguras($_POST['figura']);
}

if (isset($_POST['validaTriangulo'])) { // Cuando presionamos en le boton de validar triángulo
    triangulo($_POST['base']);
}

if (isset($_POST['validaCuadrado'])) { // Cuando presionamos en le boton de validar cuadrado
    cuadrado($_POST['lado']);
}

if (isset($_POST['validaRectangulo'])) { // Cuando presionamos en le boton de validar Rectángulo
    rectangulo($_POST['base'], $_POST['altura']);
}
