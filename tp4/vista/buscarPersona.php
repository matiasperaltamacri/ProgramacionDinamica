<?php
    $titulo="TP4 Ejercicio9";
    include_once "estructura/cabecera.php";
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página “BuscarPersona.php” que contenga un formulario que permita cargar un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    <form class="card needs-validate" method="GET" action="accion/accionBuscarPersona.php" novalidate style="padding: 5px; width:300px; margin:auto">
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