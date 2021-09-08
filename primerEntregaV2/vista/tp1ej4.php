<?php
    $titulo="EJERCICIO 4 TP1";
    include_once("estructura/cabecera.php");
?>
<link rel="stylesheet" href="css/tp1ej3.css">
<h6>CONSIGNA:</h6>
<p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.</p>
    <form method="get" action="accion/tp1accion4.php" onSubmit="return validar2('dato')">
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