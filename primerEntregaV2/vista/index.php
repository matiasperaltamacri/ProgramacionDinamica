<?php
    $titulo="EJERCICIO 1 TP1";
    include_once("estructura/cabecera.php");
    ?>
<h6>CONSIGNA:</h6>
<p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.</p>
<form id="form1" method="post" action="accion/vernumero.php" onSubmit="return validar1()">
        <table style="border:1px solid red">
            <tr>
                <td>Ingrese un numero: </td>
                <td>
                    <input type="text" name="numero" id="datoForm">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Aceptar"></td>
            </tr>
        </table>
</form>

<?php
    include_once("estructura/pie.php");
?>