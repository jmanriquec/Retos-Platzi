<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #3 - Curso en una columna</h1>
    <p>Nuevamente, pide a tu usuario que indique su curso favorito de Platzi pero ahora muestra un caracter por línea de forma que puede parecer el inicio de un acróstico.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="curso">Ingrese su curso favorito</label>
            <input type="text" name="curso" id="curso">
            <button type="submit" name="registrando">Registrar</button>
        </form>

        <?php
            if(isset($_POST['registrando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.curso.php";
                cursoFavorito($_POST['curso']); //pasamos por parametro el curso elegido
            }
        ?>
</body>
</html>