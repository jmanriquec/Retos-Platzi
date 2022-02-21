<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #9 - Recta numérica</h1>
    <p>Escribe un programa donde preguntes a tu usuario si desea una recta numérica positiva o negativa, después pide un número que servirá como límite e imprime todos los números de uno en uno partiendo desde el cero.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="recta">Deseas una recta ¿Positiva ó Negativa?</label>
            <br>
            <br>
            <select name="recta" id="recta" required>
                <option value="">Seleccione una opción...</option>
                <option value="0">Negativa</option>
                <option value="1">Positiva</option>
            </select>
            <br>
            <br>
            <label for="limite">Limite</label>
            <input type="number" name="limite" id="limite">
           <br>
           <br>
            <button type="submit" name="creandorecta">Crear recta</button>
        </form>

        <?php
            if(isset($_POST['creandorecta'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.php";
                $recta = $_POST['recta'];
                $limite = $_POST['limite'];

                rectaNumerica($limite, $recta); //pasamos por parametro los valores
            }
        ?>
</body>
</html>