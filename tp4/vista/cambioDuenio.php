<?php
    $titulo="TP4 Ejercicio8";
    include_once "estructura/cabecera.php";
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    <form class="card needs-validation" method="POST" action="accion/accionCambioDuenio.php" novalidate style="padding: 5px; width:300px; margin:auto">
        <div>
            <label for="patente">PATENTE</label>
            <input type="text" class="form-control" id="patente" name="patente" placeholder="MTV 101" pattern="[A-Z 0-9]{7,}" required>
            <div class="invalid-feedback">Ingrese la patente correctamente</div>
        </div>
        <div>
            <label for="dni">NUMERO DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="32456963" pattern="[0-9]{7,8}" required>
            <div class="invalid-feedback">Ingrese el DNI correctamente</div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Enviar</button>
    </form>

<?php
    include_once "estructura/pie.php";
?>