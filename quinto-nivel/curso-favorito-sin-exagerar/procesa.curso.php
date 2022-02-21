<?php

//creamos función que se encargue de procesar la solicitud del usuario

function cursoFavorito($curso, $repeticiones){ //Recibimos por parametro el curso ingresado por el ususario
    if($repeticiones<=0){ //si el número de repeticiones es menor ó igual a cero mostramos msj
        echo "<br><h1>Las repeticiones no pueden ser menor ó igual que cero (0).</h1>";
    }else{
        
    if($repeticiones>15){ //Si el numero de repeticiones ingresado es mayor que 15
        echo "<br><h1>El número es muy grande</h1><hr>";
        for ($i=0; $i < 3; $i++) { //Solamente repetimos el curso 3 veces
            echo $i+1 . ". " .$curso . "<br>"; //imprimimos en pantalla
        }
    }else{

    if($curso){//validamos que no este vacio
        echo "<br><h1>Imprimendo tú curso favorito $repeticiones veces...</h1><hr>"; //Mostramos al usuario msj que se esta imprimendo
    for ($i=0; $i < $repeticiones; $i++) { //Mediante un for repetimos n veces segun el usuario lo solicite       
        echo $i+1 . ". " .$curso . "<br>";
    }
    }else{
        //si esta vacia la caja de texto le enviamos un msj al usuario
        echo "<br><h1>No haz ingresado ningun curso, revisa é intenta de nuevo.</h1><hr>";
    }
}
}
    
}