<?php
    $titulo="EJERCICIO 2 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if ($_GET){
        $suma=0;
        $arreglo[0]= $_GET["lunes"];
        $arreglo[1]= $_GET['martes'];
        $arreglo[2]= $_GET['miercoles'];
        $arreglo[3]= $_GET['jueves'];
        $arreglo[4]= $_GET['viernes'];
        for ($i=0;$i<=4;$i++){
            $suma=$suma+$arreglo[$i];
        }
        echo "El resultado es: $suma <br/>";
    }
    else{
        echo "No hay datos<br/>";
    }
    include_once("../estructura/pieAccion.php");
?>