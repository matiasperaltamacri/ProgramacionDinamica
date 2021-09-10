<?php
    $titulo="EJERCICIO 2 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/controlTp1ej2.php");
    if ($_GET){
        $obj= new control_tp1ej2;
        $texto=$obj->sumaHoras($_GET);
        echo $texto;
    }
    else{
        echo "No hay datos<br/>";
    }
    include_once("../estructura/pieAccion.php");
?>