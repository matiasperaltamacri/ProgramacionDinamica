<?php
    $titulo="EJERCICIO 2 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>
    <form class="card row g-3 needs-validation" method="get" action="accion/tp1accion2.php" style="width:fit-content;margin:auto" novalidate>
        <div>
            <label for="lunes" class="form-label">Lunes</label>
            <input type="text" name="lunes" id="lunes" class="dia" pattern="[0-9]{1}" required>
            <div class="invalid-feedback">Ingresar horas cursadas</div>
        </div>
        <div>
            <label for="martes" class="form-label">Martes</label>
            <input type="text" name="martes" id="martes" class="dia" pattern="[0-9]{1}" required>
            <div class="invalid-feedback">Ingresar horas cursadas</div>
        </div>
        <div>
            <label for="miercoles" class="form-label">Miercoles</label>
            <input type="text" name="miercoles" id="miercoles" class="dia" pattern="[0-9]{1}" required>
            <div class="invalid-feedback">Ingresar horas cursadas</div>
        </div>
        <div>
            <label for="jueves" class="form-label">Jueves</label>
            <input type="text" name="jueves" id="jueves" class="dia" pattern="[0-9]{1}" required>
            <div class="invalid-feedback">Ingresar horas cursadas</div>
        </div>
        <div>
            <label for="viernes" class="form-label">Viernes</label>
            <input type="text" name="viernes" id="viernes" class="dia" pattern="[0-9]{1}" required>
            <div class="invalid-feedback">Ingresar horas cursadas</div>
        </div>
        <div>
            <button class="btn btn-primary" type="input">Enviar</button>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>