<?php
    $titulo="EJERCICIO 8 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if ($_GET){
        $edad=$_GET['edad'];
        $estudia=$_GET['estudiante'];
        if ($estudia=="si" || $edad<12){
            $importe=160;
            if ($edad>=12){
                $importe+=20;
            }
        }else{
            $importe=300;
        }
        echo "Tarifa del cliente: $$importe<br/>";
    }else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>