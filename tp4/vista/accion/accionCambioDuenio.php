<?php
$titulo="TP4 Ejercicio8";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAmbP=new AbmPersona();
$objP=$objAmbP->buscarObjeto($datos,false);
if ($objP<>null){
    $objAmbA=new AbmAuto();
    $objA=$objAmbA->buscarObjeto($datos,true);
    if ($objA<>null){
        $resp=$objAmbA->modificacion($datos);
        if($resp){
            echo "La modificación se realizo con éxito.";
        }else{
            echo "Error en la modificación.";
        }
    }else{
        echo "No se encontro un auto con la patente ".$datos['patente']." en la Base.";
    }
}else{
    echo "No se encontro un cliente con el dni ".$datos['dni']." en la Base.";
}
echo "<br/><button class='btn btn-info mt-5' onclick='window.history.back()'>Atras</button>";

include_once "../estructura/pieAccion.php";
?>