<?php
$titulo = "EJERCICIO 1 TP3";
include_once "../estructura/cabeceraAccion.php";
include_once "../../control/procesarTp3Ej1.php";
include_once "../../utiles/funciones.php";

$datos = data_submitted();
$obj = new procesarTp3Ej1();
$respuesta = $obj->subirArchivo($datos);
$colDir = $obj->obtenerArchivos();

if ($respuesta == "") {
    echo "<div class='alert alert-success' role='alert'>Archivo subido exitosamente.</div>";
    $enlace = $obj->abrirArchivo($colDir);
    echo $enlace;
    if ($enlace != "") {
        echo "<p><a href='$enlace'>Archivo</a></p>";
    }

} else {
    echo "<div class='alert alert-danger' role='alert'>$respuesta</div>";
}
echo "<a href='../tp3ej1.php'><button type='button' class='btn btn-info'>Regresar</button></a>";

include_once "../estructura/pieAccion.php";
?>