<?php require_once "procesa-datos.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi | Cuarto Nivel</title>
</head>
<body>
    <h1>Reto #7 - Calcular perímetros y áreas</h1>
    <p>Muestra un menú con distintas figuras geométricas, por lo menos 3 diferentes (triángulo, cuadrado, pentágono, etc.)</p>
    <p>Tu usuario debe poder elegir alguna de estas figuras, indicar la distancia de sus lados y mostrar como resultado tanto el perímetro como el área de dicha figura.</p>

    <h2>Por favor elija una figura geométrica</h2>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="figura">Seleccione una figura</label>
        <select name="figura" id="figura">
            <option value="">Seleccione una opción</option>
            <option value="1">Triángulo equilatero</option>
            <option value="2">Cuadrado</option>
            <option value="3">Rectángulo</option>
        </select>
        <br>
        <br>
        <button type="submit" name="next">Siguiente</button>

    </form>
    <br>
    <?php
    //incluimos el archivo figuras.php con las figuras que ha seleccionado el usuario
include "figuras.php";
?>

</body>
</html>
