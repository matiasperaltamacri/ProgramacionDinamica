<?php
$titulo="TP4 Ejercicio6";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAbmP=new AbmPersona();
$resp=$objAbmP->alta($datos);
if ($resp){
    echo "Los datos fueron cargados";
}else{
    echo "No se cargaron los datos";
}

include_once "../estructura/pieAccion.php";
?>