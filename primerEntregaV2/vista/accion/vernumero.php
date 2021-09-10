<?php
    $titulo="EJERCICIO 1 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-Tp1Ej1.php");
    if ($_POST){
        $obj=new control_tp1ej1;
        $texto=$obj->verNum($_POST);
        echo $texto;
    }
    else{
        echo "No se recibieron datos<br />";
    }          
    echo '<a href="../index.php"><button> Regresar ← </button></a>';
    include_once("../estructura/pieAccion.php");
?>