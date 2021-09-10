<?php
    $titulo="EJERCICIO 3 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>  
    <link rel="stylesheet" href="css/tp1ej3.css">
    <h6>CONSIGNA: </h6>
    <p>Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias</p>
    <form class="card row g-3 needs-validation" method="post" action="accion/tp1accion3.php" style="width:fit-content; margin:auto" novalidate>
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