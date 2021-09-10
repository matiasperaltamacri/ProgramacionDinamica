<?php
$titulo = "EJERCICIO 3 TP3";
include_once "../estructura/cabeceraAccion.php";
include_once "../../control/procesarTp3Ej3.php";
include_once "../../configuracion.php";

$datos = data_submitted();
$obj = new procesarTp3Ej3();
$resp = $obj->mostrar($datos);
$arrayRespuesta = $obj->cargarImagen($datos);

if ($arrayRespuesta["respCarga"] == "") {
    $resp .= "<img class='rounded mx-auto d-block py-5' src='" . $arrayRespuesta['enlace'] . "' style='width:300px'>";
} else {
    $resp .= "<div class='alert alert-danger' role='alert'>". $arrayRespuesta['respCarga'] . "</div>";
}

?>
<div class="card mt-5" style="width: 800px;background-color:#d1e7dd;margin:auto">
    <div class="card-body">
        <h2 class="card-title" style="color:#17a2b8">La pelicula introducida es</h2>
        <p class="card-text" style="color:#108800"><?php echo $resp ?></p>
    </div>
    <div class="row">
                <div class="col-9"></div>
                <div class="col-3 mb-3 d-flex">
                <a href='../tp3ej3.php'><button class="btn btn-primary text-white">Regresar</button></a>
                </div>
                
            </div>
    
</div>
<?php
include_once "../estructura/pieAccion.php";
?>
