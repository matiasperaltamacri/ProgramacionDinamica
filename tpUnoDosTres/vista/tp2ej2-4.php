<?php
    $titulo="EJERCICIO 4 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>
<link rel="stylesheet" href="css/tp1ej3.css">
<h6>CONSIGNA:</h6>
<p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.</p>
    <form class="card row g-3 needs-validation" method="get" action="accion/tp1accion4.php" style="width:fit-content; margin:auto" novalidate>
        <div>
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="dato" id="nombre" pattern="[a-zA-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese nombre</div>
        </div>
        <div>
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" class="dato" id="apellido" pattern="[a-z A-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese apellido</div>
        </div>
        <div>
            <label for="edad" class="form-label">Edad:</label>
            <input type="text" name="edad" class="dato" id="edad" pattern="[0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese edad</div>
        </div>
        <div>
            <label for="direccion" class="form-label">Direccion:</label>
            <input type="text" name="direccion" class="dato" id="direccion" pattern="[a-z A-Z 0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese direccion</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>