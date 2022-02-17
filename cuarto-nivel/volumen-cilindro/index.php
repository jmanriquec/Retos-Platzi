<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi | Cuarto Nivel</title>
</head>
<body>
    <h1>Reto #5 - Calcular volumen de un cilindro</h1>
    <p>Pide a tu usuario que indique el radio y la profundidad de un cilindro. Después aplica la fórmula correspondiente para calcular el volumen del cilindro y reduce el resultado a un solo decimal.</p>
<br>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<br>
    <label for="radio">Ingrese el radio: </label>
    <input type="text" name="radio" id="radio">
    <br>
    <br>
    <label for="altura">Ingrese Altura: </label>
    <input type="text" name="altura" id="altura">
    <br>
    <br>
    <button type="submit" name="validando">Calcular Volumen</button>

</form>

<br>

<?php
if (isset($_POST['validando'])) { #Nos aseguramos de que el código se ejecute solo si se a hecho clic en el boton calcular volumen
    require_once "procesa-datos.php"; //Incluimos el archivo de validación
    volumenCilindro($_POST['radio'], $_POST['altura']); //Enviamos los datos por parámetro
}
?>

</body>
</html>
