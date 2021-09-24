<?php
    $titulo="TP4 Ejercicio7";
    include_once "estructura/cabecera.php";
?>
<style>
    .seccion{
        margin:auto;
        font-weight: bold;
        color:midnightblue;
    }
</style>
<h6>CONSIGNA:</h6>
<p>Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
<form class="card needs-validation" method="POST" action="accion/accionNuevoAuto.php" novalidate style="max-width:400px; margin:auto; padding:20px;">
    <p class="seccion mb-2">DATOS VEHICULO</p>
    <div class="row">
        <div class="col-6">
            <label for="patente" class="form-label">Patente</label>
            <input type="text" id="patente" name="patente" class="form-control" placeholder="MTV 101" pattern="[a-z A-Z 0-9]{7,}" required>
            <div class="invalid-feedback">Ingrese patente correctamente</div>
        </div>
        <div class="col-6">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" id="marca" name="marca" class="form-control" placeholder="Audi" pattern="[a-z A-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese marca correctamente</div>
        </div>
    </div>
    <div>
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" id="modelo" name="modelo" class="form-control" placeholder="90/1990" pattern="[0-9]{2,4}" required>
        <div class="invalid-feedback">Ingrese modelo correctamente</div>
    </div>
    <p class="seccion mt-2 mb-2">DATOS TITULAR</p>
    <div class="row">
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" pattern="[a-z A-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese nombre correctamente</div>
        </div>
        <div class="col-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" pattern="[a-z A-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese apellido correctamente</div>
        </div>
        <div class="col-6">
            <label for="dni" class="form-label">Dni</label>
            <input class="form-control" type="text" id="dni" name="dni" placeholder="32123456" pattern="[0-9]{7,8}" required>
            <div class="invalid-feedback">Ingrese DNI correctamente</div>
        </div>
        <div class="col-6">
            <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
            <input type="text" id="fechaNac" name="fechaNac" placeholder="1999-12-25" class="form-control" pattern="[0-9 -]{10}" required>
            <div class="invalid-feedback">Ingrese Fecha correctamente</div>
        </div>
        <div class="col-6">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" pattern="[0-9]{6,}" required>
            <div class="invalid-feedback">Ingrese telefono correctamente</div>
        </div>
        <div class="col-6">
            <label for="domicilio" class="form-label">Domicilio</label>
            <input type="text" id="domicilio" name="domicilio" class="form-control" pattern="[a-z A-Z 0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese domicilio correctamente</div>
        </div>
    </div>
    
    <button class="btn btn-primary mt-3" type="submit">Enviar</button>
</form>
<?php
    include_once "estructura/pie.php";
?>