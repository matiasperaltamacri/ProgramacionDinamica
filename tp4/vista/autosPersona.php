<?php
    $titulo="TP4 Ejercicio5";
    include_once "estructura/cabecera.php";
?>
    <link rel="stylesheet" href="css/verAutos.css">
    <h6>CONSIGNA:</h6>
    <p>Recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    <form class="needs-validation" action="accion/accionAutosPersona.php" method="POST"  novalidate>
        <div>
            <label for="dni" class="label-form">Ingrese DNI: </label>
            <input type="text" id="dni" name="dni" placeholder="28326986" pattern="[0-9]{7,8}" required>
            <div class="invalid-feedback">Ingrese un número de DNI correcto</div>
        </div>
        
        <input class="btn btn-primary" type="submit">
    </form>
    <a href="listaPersonas.php"><button class="btn btn-outline-info mt-5">listaPersonas</button></a>
    
<?php
    include_once "estructura/pie.php";
?>