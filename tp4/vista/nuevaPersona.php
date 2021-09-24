<?php
    $titulo="TP4 Ejercicio6";
    include_once "estructura/cabecera.php";
?>
<h6>CONSIGNA:</h6>
<p>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
<form class="card needs-validation" method="POST" action="accion/accionNuevaPersona.php" novalidate style="max-width:300px; margin:auto; padding:20px;">
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" pattern="[a-z A-Z]{1,}" required>
        <div class="invalid-feedback">Ingrese nombre correctamente</div>
    </div>
    <div>
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" pattern="[a-z A-Z]{1,}" required>
        <div class="invalid-feedback">Ingrese apellido correctamente</div>
    </div>
    <div>
        <label for="dni" class="form-label">Dni</label>
        <input class="form-control" type="text" id="dni" name="dni" pattern="[0-9]{7,8}" required>
        <div class="invalid-feedback">Ingrese DNI correctamente</div>
    </div>
    <div>
        <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
        <input type="text" id="fechaNac" name="fechaNac" placeholder="1999-12-25" class="form-control" pattern="[0-9 -]{10}" required>
        <div class="invalid-feedback">Ingrese Fecha correctamente</div>
    </div>
    <div>
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" id="telefono" name="telefono" class="form-control" pattern="[0-9]{6,}" required>
        <div class="invalid-feedback">Ingrese telefono correctamente</div>
    </div>
    <div>
        <label for="domicilio" class="form-label">Domicilio</label>
        <input type="text" id="domicilio" name="domicilio" class="form-control" pattern="[a-z A-Z 0-9]{1,}" required>
        <div class="invalid-feedback">Ingrese domicilio correctamente</div>
    </div>
    <button class="btn btn-primary mt-3" type="submit">Enviar</button>
</form>
<?php
    include_once "estructura/pie.php";
?>