<?php
    $titulo="EJERCICIO 3 TP2";
    include_once("../estructura/cabeceraAccion.php");
	include_once("../../control/control-Tp2Ej3.php");
    if($_POST){
        $obj=new control_tp2ej3;
        $texto=$obj->mostrar($_POST);
        echo $texto;
    }else{
        echo"No se recibieron datos";
    }
    include_once("../estructura/pieAccion.php");
?>