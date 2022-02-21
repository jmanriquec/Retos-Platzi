<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #5 - Tabla de multiplicar.</h1>
    <p>Pide a tu usuario un número, luego de ello muestra la tabla de multiplicar de ese número del 1 al 10.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Ingrese número</label>
            <input type="text" name="numero" id="numero"><br>
            <button type="submit" name="registrando">Registrar</button>
        </form>

        <?php
            if(isset($_POST['registrando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.php";
                tabla($_POST['numero']); //pasamos por parametro el número de tabla a multipicar elegido
            }
        ?>
</body>
</html>