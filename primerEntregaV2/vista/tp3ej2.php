<?php
    $titulo="EJERCICIO 2 TP3";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
que el tipo esperado sea <strong>txt (texto plano)</strong>, si es correcto deberá abrir el archivo y mostrar su
contenido en un textarea.</p>
    <form method="post"  action="accion/tp3accion2.php" enctype="multipart/form-data">
        <input type="file" id="miArchivo" name="miArchivo">
        <br/>
        <input type="submit">
    </form>
<?php
    include_once("estructura/pie.php");
?>