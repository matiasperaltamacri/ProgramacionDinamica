<?php
    $titulo="EJERCICIO 4 TP1";
    include_once("../estructura/cabeceraAccion.php");
    include_once "../../control/procesarTp1Ej4.php";
include_once "../../utiles/funciones.php";

$datos = data_submitted();
$obj = new procesarTp1Ej4();
$respuesta = $obj->procesarDatos($datos);

if($respuesta != ""){
    echo "<div class='alert alert-success' role='alert'><p>".$respuesta."</p></div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>No se recibieron datos</div>";
}
echo "<a href='../tp1ej4.php'><button type='button' class='btn btn-info'>Regresar</button></a>";


    include_once("../estructura/pieAccion.php");
?>