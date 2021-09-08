<?php
    $titulo="EJERCICIO 4 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if($_GET){
        $edad=$_GET['edad'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];        
        $direccion=$_GET['direccion'];
        if ($edad<18){
            
            echo "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion.<br/>";
        }
        else{
            echo "Hola, yo soy $nombre $apellido, soy mayor de edad y vivo en $direccion.<br/>";
        }
    }
    else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>