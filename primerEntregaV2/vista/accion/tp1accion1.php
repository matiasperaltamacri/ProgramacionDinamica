<?php
$titulo = "EJERCICIO 1 TP1";
include_once "../estructura/cabeceraAccion.php";
include_once "../../control/vernumero.php";
include_once "../../utiles/funciones.php";

$datos = data_submitted();
$objVerificacion = new vernumero();
$respuesta = $objVerificacion->verificarDatos($datos);

if($respuesta != ""){
    echo "<div class='alert alert-success' role='alert'>".$respuesta."</div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>No se recibieron datos</div>";
}
echo "<a href='../index.php'><button type='button' class='btn btn-info'>Regresar</button></a>";

include_once "../estructura/pieAccion.php";
?>