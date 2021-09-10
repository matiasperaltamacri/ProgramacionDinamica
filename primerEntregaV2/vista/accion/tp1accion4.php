<?php
    $titulo="EJERCICIO 4 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-Tp1Ej4.php");
    if($_GET){
        $obj=new control_tp1ej4;
        $texto=$obj->mostrar($_GET);
        echo $texto;
    }
    else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>