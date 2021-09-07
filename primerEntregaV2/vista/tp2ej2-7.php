<?php
    $titulo="EJERCICIO 7 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>
    <h6>CONSIGNA:</h6>
    <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.</p>
    <form class="card row g-3 needs-validation" method="get" action="accion/tp1accion7.php" style="width:fit-content; margin:auto" novalidate>
        <div>
            <label for="num1" class="form-label">Numero 1:</label>
            <input type="text" name="num1" id="num1" pattern="[0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese un valor</div>
        </div>
        <div>
            <label for="num2" class="form-label">Numero 2:</label>
            <input type="text" name="num2" id="num2" pattern="[0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese un valor</div>
        </div>
        <div>
            <label class="form-label">Tipo de operacion:</label>
            <select name="tipo" required>
                    <option>
                    <option>SUMA
                    <option>RESTA
                    <option>MULTIPLICACION
                    <option>DIVISION
            </select>
            <div class="invalid-feedback">Elija una opcion</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>
