<?php
    $titulo="EJERCICIO 3 TP1";
    include_once("estructura/cabecera.php");
?>  
    <link rel="stylesheet" href="css/tp1ej3.css">
    <h6>CONSIGNA: </h6>
    <p>Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias</p>
    <form method="post" action="accion/tp1accion3.php" onSubmit="return validar2('dato')" >
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" class="dato"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" class="dato"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="text" name="edad" class="dato"></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" class="dato"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
<?php
    include_once("estructura/pie.php");
?>