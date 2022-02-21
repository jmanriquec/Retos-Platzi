<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos Platzi - Quinto Nivel</title>
</head>
<body>
    <h1>Reto #8 - Suma autorizada</h1>
    <p>Crearás un programa que pedirá a tu usuario 4 números, uno por uno. Al indicarlo preguntarás al usuario si desea sumarlo al total, si la respuesta es afirmativa se sumará. Al final debes mostrar el valor de la suma de aquellos números que fueron aceptados para la suma.</p>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="n1">Número 1</label>
            <input type="checkbox" name="c1" id="c1" >
            <input type="text" name="n1" id="n1" value="0"><br>
            <label for="n2">Número 2</label>
            <input type="checkbox" name="c2" id="c2">
            <input type="text" name="n2" id="n2" value="0"><br>
            <label for="n3">Número 3</label>
            <input type="checkbox" name="c3" id="c3">
            <input type="text" name="n3" id="n3" value="0"><br>
            <label for="n4">Número 4</label>
            <input type="checkbox" name="c4" id="c4">
            <input type="text" name="n4" id="n4" value="0"><br>
            <button type="submit" name="sumando">Sumar</button>
        </form>

        <?php
            if(isset($_POST['sumando'])){ //no aseguramos de que se ejecute solo si el usuario ha echo clic en el boton
                include "procesa.php";

                /**
                 * Sí no se autorizo ningun número el valor será cero para cada uno
                 */
                if(!isset($_POST['c1'])){
                    $auto1 = 0;
                }else{
                    $auto1 = $_POST['c1'];
                }

                if(!isset($_POST['c2'])){
                    $auto2 = 0;
                }else{
                    $auto2 = $_POST['c2'];
                }

                if(!isset($_POST['c3'])){
                    $auto3 = 0;
                }else{
                    $auto3 = $_POST['c3'];
                }

                if(!isset($_POST['c4'])){
                    $auto4 = 0;
                }else{
                    $auto4 = $_POST['c4'];
                }

                sumaAutorizada($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $auto1, $auto2, $auto3, $auto4); //pasamos por parametro los valores
            }
        ?>
</body>
</html>