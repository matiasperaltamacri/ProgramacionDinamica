<?php 
$titulo="EJERCICIO 1 TP3";
include_once ("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son <strong>.doc o pdf</strong> y además el tamaño máximo permitido es de <strong>2mb.</strong> En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema.</p>
    <form method="post"  action="accion/tp3accion1.php" enctype="multipart/form-data">
        <input type="file" id="miArchivo" name="miArchivo">
        <br/>
        <input type="submit">
    </form>
<?php
    include_once("estructura/pie.php");
?>