<?php 
$titulo="EJERCICIO 1 TP3";
include_once ("estructura/cabecera.php");
?>
    <p class="h3">CONSIGNA:</p>
<p class="lead">
Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son <strong>.doc o pdf</strong> y además el tamaño máximo permitido es de <strong>2mb.</strong> En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema.
</p>
    <form method="post"  action="accion/tp3accion1.php" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
            <div class="form-group has-feedback">
                <label for="texto" class="control-label">Archivo Texto:</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="texto" name ="texto" required>

                </div>
                <small class="text-muted">Archivo DOC/PDF - No superiores a 2 MB</small>
                <span class="form-control-feedback" aria-hidden="true"></span>

            </div>
            </div>
        </div>

    <div class="row d-flex justify-content-center m-3">
            <div class="col-md-1 botones">
                <input id="btn_eje1-sub" name="btn_eje1-sub" class="form-control btn-block btn-info" type="submit" value="Enviar">
            </div>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>