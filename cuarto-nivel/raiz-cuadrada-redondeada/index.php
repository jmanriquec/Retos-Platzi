<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi | Cuarto Nivel</title>
</head>
<body>
    <h1>Reto #3 - Raíces cuadradas redondeadas</h1>
    <p>Pide a tu usuario que ingrese un número, cuyo valor debe ser mayor a 20, luego calcula su raíz cuadrada y reduce a 2 o 3 decimales el resultado final.</p>

    <!--Creamos formulario donde el usuario ingresa los datos solicitados-->
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Ingrese un número mayor que 20: </label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <button type="submit" name="calculando">Calcular Raiz Cuadrada</button>
    </form>
<br>

<?php
if (isset($_POST['calculando'])) { //Se ejecuta el codigo cuando el usuario da clic en el boton del formulario
    $numero = $_POST['numero']; //Recibimos el número enviado en el formulario a travez del metodo post
    include_once "procesa-raiz.php"; //Incluimos el archivo

    raizCuadradaRedondeada($numero); //Llamamos a la función
}
?>

</body>
</html>
