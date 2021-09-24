<?php
    $titulo="TP4 Ejercicio4";
    include_once "estructura/cabecera.php";
    $objAbmAuto=new AbmAuto();
    $arreglo=$objAbmAuto->buscar(true,null);
?>
    <!-- <link rel="stylesheet" href="css/verAutos.css"> -->
    <h6>CONSIGNA:</h6>
    <p>Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
    <form class="card needs-validation p-1" method="POST" action="accion/accionBuscarAuto.php" style="width: 300px;" novalidate>
        <div>
            <label for="patente" class="form-check-label">PATENTE:</label>
            <input id="patente" name="patente" type="text" placeholder="ADC 152" required>
            <div class="invalid-feedback">Complete el campo</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button> 
        </div>
        
    </form>
<?php
    include_once "estructura/pie.php";
?>