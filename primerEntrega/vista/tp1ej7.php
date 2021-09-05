<?php
    $titulo="EJERCICIO 7 TP1";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.</p>
    <form method="get" action="accion/tp1accion7.php" style="border:1px solid lightgrey; width:fit-content">
        <table>
            <tr>
                <td>Numero 1: </td>
                <td><input type="text" name="num1" required></td>
            </tr>
            <tr>
                <td>Numero 2: </td>
                <td><input type="text" name="num2" required></td>
            </tr>
            <tr>
                <td>Tipo de operación: </td>
                <td>
                    <select name="tipo" required>
                    <option>
                    <option>SUMA
                    <option>RESTA
                    <option>MULTIPLICACION
                    <option>DIVISION
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
<?php
    include_once("estructura/pie.php");
?>
