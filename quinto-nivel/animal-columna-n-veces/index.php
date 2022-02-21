<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #4 - Animal en columna ‘n’ veces.</h1>
    <p>Toma como base el reto anterior, pide a tu usuario que indique su animal favorito y después muéstralo con un caracter por línea. Esto debe repetirse un número de veces que ya hayas preguntado a tu usuario.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="animal">Ingrese su animal favorito</label>
            <input type="text" name="animal" id="animal"><br> <br>
            <label for="repetir">¿Cuantas veces quiere que se repita</label>
            <input type="text" name="repetir" id="repetir">
            <button type="submit" name="registrando">Registrar</button>
        </form>

        <?php
            if(isset($_POST['registrando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.php";
                animalFavorito($_POST['animal'], $_POST['repetir']); //pasamos por parametro el curso elegido
            }
        ?>
</body>
</html>