<?php
$titulo="TP4 Ejercicio7";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAbmP=new AbmPersona();
$resp=$objAbmP->alta($datos);
if ($resp){
    $objAbmA=new AbmAuto();
    $resp2=$objAbmA->alta($datos);
    if ($resp2){
        echo "Los datos fueron cargados con exito";
    }else{
        echo "Error en la carga del vehiculo";
    }
    
}else{
    echo "Error en la carga del titular";
}

include_once "../estructura/pieAccion.php";
?>