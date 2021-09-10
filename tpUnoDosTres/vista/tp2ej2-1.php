<?php
    $titulo="EJERCICIO 1 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
    ?>
<h6>CONSIGNA:</h6>
<p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.</p>

<form class="card row g-3 needs-validation" id="form1" method="post" action="accion/vernumero.php" style="width:fit-content; margin:auto" novalidate>
        <div class="col-12">
            <label for="datoForm" class="form-label">Ingrese un numero:</label>
            <input type="text" pattern="[0-9]{1,}" name="numero" id="datoForm" required>
            <div class="invalid-feedback">Debe ingresar un número</div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
        
</form>

<?php
    include_once("estructura/pie.php");
?>