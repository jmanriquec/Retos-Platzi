<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Retos Platzi | Cuarto Nivel</title>
    </head>

    <body>
        <h1>Reto #1 - Multiplicar decimales</h1>
        <p>Pide a tu usuario que ingrese 2 números con decimales (cuantos más mejor) y muestra el resultado de
            multiplicarlos ¿fácil, no?</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="numero1">Número 1: </label>
            <input type="number" name="numero1" id="numero1" step=".00001" required>
            <br>
            <br>
            <label for="numero2">Número 2</label>
            <input type="number" name="numero2" id="numero2" step=".00001" required>
            <br>
            <br>
            <button type="submit" name="operando">Multiplicar</button>
        </form>
        <br>
        <p>
            <?php

if (isset($_POST['operando'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operando = $_POST['operando'];

    include_once "procesa.php";

    multipicaDecimales($numero1, $numero2);
}
//Creamos las variables

?>
        </p>

    </body>

</html>
