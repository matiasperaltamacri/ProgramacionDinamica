<?php
    $titulo="EJERCICIO 3 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-TP1Ej3.php");
    if($_POST){
        $obj=new control_tp1ej3;
        $texto=$obj->mostrar($_POST);
        echo $texto;
    }
    else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>