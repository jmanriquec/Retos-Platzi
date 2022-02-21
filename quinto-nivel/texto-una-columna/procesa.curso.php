<?php

//creamos función que se encargue de procesar la solicitud del usuario

function cursoFavorito($curso){ //Recibimos por parametro el curso ingresado por el ususario
    
    if($curso){//validamos que no este vacio
        echo "<br><h1>Imprimendo tú curso favorito en una columna una vez.</h1><hr>"; //Mostramos al usuario msj que se esta imprimendo
    for ($i=0; $i < strlen($curso); $i++) { //mediante la funcion strelen contamos los carateres       
        echo $curso[$i] . "<br>"; //imprimimos el texto en columna
    }
    }else{
        //si esta vacia la caja de texto le enviamos un msj al usuario
        echo "<br><h1>No haz ingresado ningun curso, revisa é intenta de nuevo.</h1><hr>";
    }
}