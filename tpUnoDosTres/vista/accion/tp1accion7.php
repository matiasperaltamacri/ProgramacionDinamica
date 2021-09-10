<?php
    $titulo="EJERCICIO 7 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-Tp1Ej7.php");
    if ($_GET){
        $obj=new control_tp1ej7;
        $texto= $obj->calcula($_GET);
        echo $texto;
    }else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>