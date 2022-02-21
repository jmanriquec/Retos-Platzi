<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto # 6 - Cuenta regresiva.</h1>
    <p>Pide a tu usuario un número, después imprime una cuenta regresiva uno a uno, desde ese número hasta 0. Esto aplica también para números negativos.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Ingrese número de cuenta regresiva</label>
            <input type="text" name="numero" id="numero"><br>
            <button type="submit" name="registrando">Registrar</button>
        </form>

        <?php
            if(isset($_POST['registrando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.php";
                cuentaRegresiva($_POST['numero']); //pasamos por parametro para la cuenta regresiva
            }
        ?>
</body>
</html>