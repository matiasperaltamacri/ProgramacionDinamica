<?php
    $titulo="EJERCICIO 3 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if($_POST){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $direccion=$_POST['direccion'];
        echo "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion.<br/>";
    }
    else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>