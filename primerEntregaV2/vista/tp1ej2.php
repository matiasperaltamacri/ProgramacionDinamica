<?php
    $titulo="EJERCICIO 2 TP1";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>
    <form method="get" action="accion/tp1accion2.php" onSubmit="return validar2('dia')" style="border: solid 1px lightgrey; width:fit-content">
        <table>
            <tr>
                <td>Lunes</td>
                <td><input type="text" name="lunes" class="dia"></td>
            </tr>
            <tr>
                <td>Martes</td>
                <td><input type="text" name="martes" class="dia"></td>
            </tr>
            <tr>
                <td>Miercoles</td>
                <td><input type="text" name="miercoles" class="dia"></td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td><input type="text" name="jueves" class="dia"></td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td><input type="text" name="viernes" class="dia"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
<?php
    include_once("estructura/pie.php");
?>