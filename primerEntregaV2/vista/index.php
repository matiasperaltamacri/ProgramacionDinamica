<?php
$titulo = "EJERCICIO 1 TP1";
include_once "estructura/cabecera.php";
?>
<p class="h3">CONSIGNA:</p>
<p class="lead">
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
</p>
<form id="form1" method="post" action="accion/tp1accion1.php" onSubmit="return validar1()">
        <div class="card card-primary col-md-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputNumber">Ingrese un número:</label>
                    <input type="number" class="form-control" name="numero" id="datoForm">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary float-right">Aceptar</button>
            </div>
        </div>
</form>

<?php
include_once "estructura/pie.php";
?>