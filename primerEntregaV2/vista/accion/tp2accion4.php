<?php
    $titulo="EJERCICIO 4 TP2";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-tp2ej4.php");
    include_once("../../configuracion.php");
    

    $datos=data_submitted();
    $obj=new control_ej4();
    $resp=$obj->mostrar($datos);
?>
<div class="card mt-5" style="width: 800px;background-color:#d1e7dd;margin:auto">
    <div class="card-body">
        <h2 class="card-title" style="color:#17a2b8">La pelicula introducida es</h2>
        <p class="card-text" style="color:#108800"><?php echo $resp ?></p>
    </div>

    <div class="d-flex justify-content-end">
        <div class="col-3 mb-3">
            <a href='../tp2ej4.php'><button class="btn btn-primary text-white">Regresar</button></a>
        </div>
    </div>
</div>

<?php
    include_once("../estructura/pieAccion.php");
?>