<?php
    $titulo="EJERCICIO 2 TP3";
    include_once("estructura/cabecera.php");
?>
<p class="h3">CONSIGNA:</p>
<p class="lead">
Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
que el tipo esperado sea <strong>txt (texto plano)</strong>, si es correcto deberá abrir el archivo y mostrar su
contenido en un textarea.
</p>
    <form method="post" action="accion/tp3accion2.php" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
            <div class="form-group has-feedback">
                <label for="texto" class="control-label">Archivo:</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="miArchivo" name ="miArchivo" required>

                </div>
                <small class="text-muted">Se permite solo formato .txt</small>
                <span class="form-control-feedback" aria-hidden="true"></span>

            </div>
            </div>
        </div>

    <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-1 botones">
                <input id="btn_eje1-sub" name="btn_eje1-sub" class="form-control btn-block btn-info" type="submit" value="Enviar">
            </div>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>