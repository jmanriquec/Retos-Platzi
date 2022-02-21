<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #7 - Curso favorito, sin exagerar</h1>
    <p>Toma como base el Reto #2, pero agrega como condiciones las siguientes:</p>
<p>Si el número ‘n’ es mayor a 15, solo imprimirás el nombre del curso 3 veces e indicarás que ‘n’ es un número muy grande.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="curso">Ingrese su curso favorito</label>
            <input type="text" name="curso" id="curso"><br>
            <label for="repeticion">Ingrese Número de repeticiones</label>
            <input type="text" name="repeticion" id="repeticion">
            <button type="submit" name="registrando">Registrar</button>
        </form>

        <?php
            if(isset($_POST['registrando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.curso.php";
                cursoFavorito($_POST['curso'], $_POST['repeticion']); //pasamos por parametro el curso elegido
            }
        ?>
</body>
</html>