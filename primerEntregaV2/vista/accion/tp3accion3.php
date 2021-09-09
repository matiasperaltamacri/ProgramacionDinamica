<?php
$titulo = "Ejercicio 3 TP3";
include_once "../estructura/cabeceraAccion.php";
include_once "../../control/procesarTp3Ej3.php";
include_once "../../configuracion.php";

$datos = data_submitted();
$obj = new procesarTp3Ej3();
$resp = $obj->mostrar($datos);
$arrayRespuesta = $obj->cargarImagen($datos);

if ($arrayRespuesta["respCarga"] == "") {
    $resp .= "<img src='" . $arrayRespuesta['enlace'] . "' style='width:300px'>";
} else {
    $resp .= "<div class='alert alert-danger' role='alert'>". $arrayRespuesta['respCarga'] . "</div>";
}

?>
<div class="card mt-5" style="width: 800px;background-color:#66CC99;margin:auto">
    <div class="card-body">
        <h2 class="card-title" style="color:blue">La pelicula introducida es</h2>
        <p class="card-text" style="color:#108800"><?php echo $resp ?></p>
    </div>
</div>
<?php
include_once "../estructura/pieAccion.php";
?>
