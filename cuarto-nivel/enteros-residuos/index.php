<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi | Cuarto Nivel</title>
</head>
<body>
    <h1>Reto #6 - Mostrar enteros y residuos</h1>
    <p>Pide al usuario que ingrese 2 números, divídelos, muestra un resultado como enteros y además el residuo por separado de una forma que seal fácil de entender al usuario.
Por ejemplo: “9 dividido entre 2 es 4 y sobra 1”.</p>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <label for="numero1">Numero 1: </label>
    <input type="text" name="numero1" id="numero1" required>
    <br>
    <br>
    <label for="numero2">Numero 2: </label>
    <input type="text" name="numero2" id="numero2" required>
    <br>
    <br>
    <button type="submit" name="dividiendo">Dividir</button>
</form>

<?php
if (isset($_POST['dividiendo'])) {
    require_once "procesa-datos.php";
    dividirNumeros($_POST['numero1'], $_POST['numero2']);
}
?>

</body>
</html>
