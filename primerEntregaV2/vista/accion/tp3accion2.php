<?php
$titulo = "EJERCICIO 2 TP3";
include_once "../estructura/cabeceraAccion.php";
include_once "../../control/procesarTp3Ej2.php";
include_once "../../utiles/funciones.php";

$datos = data_submitted();
$obj = new procesarTp3Ej2();
$respuesta = $obj->subirArchivo($datos);
$colDir = $obj->obtenerArchivos();

if ($respuesta == "") {
    echo "<div class='alert alert-success' role='alert'>Archivo subido exitosamente.</div>";
    $content = $obj->abrirArchivo($colDir);
    echo "<label for='Textarea'>Textarea con contenido de archivo</label>";
    echo "<textarea class='form-control' rows='7'>" . $content . "</textarea>";
} else {
    echo "<div class='alert alert-danger' role='alert'>$respuesta</div>";
}
echo "<a href='../tp3ej2.php'><button type='button' class='btn btn-info'>Regresar</button></a>";

include_once "../estructura/pieAccion.php";
?>