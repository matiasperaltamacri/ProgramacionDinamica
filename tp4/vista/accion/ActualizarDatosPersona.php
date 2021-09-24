<?php
$titulo="TP4 Ejercicio9";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAbmPers=new AbmPersona();
$resp=$objAbmPers->modificacion($datos);
if ($resp){
    echo "La modificación se realizó con exito";
}else{
    echo "Error en la modificación.";
}
echo "<br/><button class='btn btn-info mt-5' onclick='window.history.back()'>Atras</button>";

include_once "../estructura/pieAccion.php";
?>