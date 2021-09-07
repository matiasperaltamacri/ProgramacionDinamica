<?php
    $titulo="EJERCICIO 8 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.</p>
    <form class="card row g-3 needs-validation" method="get" action="accion/tp1accion8.php" style="width:fit-content;margin:auto" novalidate>
        <div>
            <label class="form-label">Estudiante:</label>
            <label for="estSi" class="form-label">Si</label>
            <input type="radio" class="form-check-input" id="estSi" name="estudiante" value="si" required>
            <label for="estNo" class="form-label">No</label>
            <input type="radio" class="form-check-input" id="estNo" name="estudiante" value="no">
            <div class="invalid-feedback">Elija una opcion</div>
        </div>
        <div>
            <label for="edad" class="form-label">Edad:</label>
            <input type="text" name="edad" id="edad" pattern="[0-9]{1,3}" required>
            <div class="invalid-feedback">Ingrese un valor</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-danger" type="reset">Borrar</button>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>
