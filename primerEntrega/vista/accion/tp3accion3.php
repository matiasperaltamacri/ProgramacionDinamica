<?php
    $titulo="Ejercicio 3 TP3";
    include_once("../estructura/cabeceraAccion.php");
    include_once("../../control/control-tp3ej3.php");
    include_once("../../configuracion.php");
    

    $datos=data_submitted();
    $obj=new control_ej3();
    $resp=$obj->mostrar($datos);
    $dir="../archivos/";
    $newDir=$dir.$_FILES['imagen']['name'];
    if (copy($_FILES['imagen']['tmp_name'],$newDir)){
        $resp.="<img src='$newDir' style='width:300px'>";
    }
?>
<div class="card mt-5" style="width: 800px;background-color:#66CC99;margin:auto">
    <div class="card-body">
        <h2 class="card-title" style="color:blue">La pelicula introducida es</h2>
        <p class="card-text" style="color:#108800"><?php echo $resp ?></p>
    </div>
</div>
<?php
    include_once("../estructura/pieAccion.php");
?>
