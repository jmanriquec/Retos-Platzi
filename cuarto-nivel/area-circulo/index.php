<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi | Cuarto Nivel</title>
</head>
<body>
    <h1>Reto #4 - Calcular área de un círculo</h1>
    <p>Solicita a tu usuario que ingrese un número el cual será el radio de un círculo y con este dato calcula el área de un círculo.</p>
    <p>Si tu lenguaje cuenta con librerías específicas para este propósito haz uso de las mismas.</p>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="radio">Ingrese el radio del circulo: </label>
        <input type="number" name="radio" id="radio">
        <br>
        <button type="submit" name="calculando">Calcular Área</button>
    </form>
    <br>
    <?php
    if(isset($_POST['calculando'])){//se ejecuta cuando se da clic en el boton del formulario
    include_once "procesa-area-circulo.php"; //incluimos el archivo que procesa la solicitud
    $radio = $_POST['radio'];//Capuramos la informacion del radio que se ingreso en el formulario
    areaCirculo($radio);//Llamamos a la funcion y le pasamos por parametro el  radio
    }

    ?>

</body>
</html>
