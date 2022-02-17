<?php

/**
 * Reto #7 - Calcular perímetros y áreas
 *
 * Muestra un menú con distintas figuras geométricas, por lo menos 3 diferentes (triángulo, cuadrado,
 * pentágono, etc.)
 * Tu usuario debe poder elegir alguna de estas figuras, indicar la distancia de sus lados y mostrar como
 * resultado tanto el perímetro como el área de dicha figura.
 */
function validaFiguras($figura)
{ //Validammos que figura ha seleccionado el usuario

    $abreForm = "<form action='$_SERVER[PHP_SELF]' method='post'>";
    $cierraForm = "</form>";

    switch ($figura) {
        case 1:
            $abreForm .= "<input type='text' name='base' placeholder='Ingrese base'>" .
                "<button type='submit' name='validaTriangulo'>Validar Triangulo</button>";
            echo $abreForm . $cierraForm;
            break;

        case 2:
            $abreForm .= "<input type='text' name='lado' placeholder='Ingrese el valor de un lado'>" .
                "<button type='submit' name='validaCuadrado'>Validar Cuadrado</button>";
            echo $abreForm . $cierraForm;
            break;

        case 3:
            $abreForm .= "<input type='text' name='base' placeholder='Ingrese la base'>" .
            "<input type='text' name='altura' placeholder='Ingrese la altura'>" .
                "<button type='submit' name='validaRectangulo'>Validar Rectangulo</button>";
            echo $abreForm . $cierraForm;
            break;
        default:
            # code...
            echo "No has seleccionado ninguna figura";
            break;
    }
}

/**
 * funcion que calcula el perimetro del triángulo
 */
function Triangulo($base)
{
    $altura = ($base * sqrt(3))/2; //Hallamos altura
    $area = ($base * $altura)/2; //Allamos el area

    $perimetro = ($base * 3); //allamos el perimetro

    echo "<hr><h3>Figura seleccionada. <strong>Triángulo equilatero</strong> </h3>" . "<hr>Área: " . $area . " <br>" .
        "Perimetro: " . $perimetro;
}

/**
 * funcion que calcula el perimetro del triángulo
 */
function cuadrado($lado)
{
    $area = $lado * $lado; //Allamos el area
    $perimetro = $lado * 4; //Allamos el perimetro

    echo "<hr><h3>Figura seleccionada. <strong>Cuadrado</strong> </h3>" . "<hr>Área: " . $area . " <br>" .
        "Perimetro: " . $perimetro;
}

/**
 * funcion que calcula el perimetro del Rectángulo
 */
function rectangulo($base, $altura)
{
    $area = $base * $altura; //Allamos el area
    $perimetro = 2*($base + $altura); //Allamos el perimetro

    echo "<hr><h3>Figura seleccionada. <strong>Rectangulo</strong> </h3>" . "<hr>Área: " . $area . " <br>" .
        "Perimetro: " . $perimetro;
}


