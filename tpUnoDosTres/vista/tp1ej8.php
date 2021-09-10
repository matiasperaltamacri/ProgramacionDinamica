<?php
    $titulo="EJERCICIO 8 TP1";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.</p>
    <form method="get" action="accion/tp1accion8.php" style="border:lightgrey 1px solid;width:fit-content">
        <table>
            <tr>
                <td>Estudiante:</td>
                <td>Si<input type="radio" name="estudiante" value="si" required> No <input type="radio" name="estudiante" value="no"></td>
            </tr>
            <tr>
                <td>Edad: </td>
                <td><input type="text" name="edad" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
<?php
    include_once("estructura/pie.php");
?>
