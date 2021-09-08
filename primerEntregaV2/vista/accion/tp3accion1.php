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
    if ($enlace != "") {
        echo "<p><a href=" . $enlace . ">Archivo</a></p>";
    }

} else {
    echo "<div class='alert alert-danger' role='alert'>$respuesta</div>";
}
echo "<a href='../tp3ej1.php'><button type='button' class='btn btn-info'>Regresar</button></a>";

// if($_FILES['miArchivo']["error"]<=0){
//     if ((($_FILES['miArchivo']['type']=="application/pdf")||($_FILES['miArchivo']['type']=="application/msword"))&&($_FILES["miArchivo"]["size"] < 2097152)){
//         $dir="../archivos/";
//         if(!copy($_FILES['miArchivo']['tmp_name'],$dir.$_FILES['miArchivo']['name'])){
//             echo "ERROR. No se pudo cargar el archivo";
//         }else{
//             $link=$dir.$_FILES['miArchivo']['name'];
//             echo "El archivo: ".$_FILES['miArchivo']['name']." se ha copiado con éxito.<br/>";
//             echo "<a href='$link'>Ubicacion del archivo</a>";
//         }
//     }else{
//         echo "ERROR. El archivo no fue guardado. Debe ser un pdf/doc no superior a 2mb.<br/>";
//     }

// }else{
//     echo "ERROR. No se pudo cargar/acceder el archivo.<br/>";
// }
include_once "../estructura/pieAccion.php";
?>