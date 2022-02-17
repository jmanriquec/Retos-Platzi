<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Retos Platzi | Cuarto Nivel</title>
    </head>

    <body>
        <h1>### Reto #2 - Reducir los decimales</h1>
        <p>Toma como base el reto anterior, pero ajústalo para que el resultado muestre solamente 1, 2, 3 o 4 decimales.</p>

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

if (isset($_POST['operando'])) { //Sí se hace clic en el boton multiplicar se ejecuta

    //en una variable guardamos los números que se envian en el formulario mediante el metodo POST
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    include_once "procesa.php"; //incluimos el archivo procesa

    multipicaDecimales($numero1, $numero2); //Llamamos la función
}
//Creamos las variables

?>
        </p>

    </body>

</html>
