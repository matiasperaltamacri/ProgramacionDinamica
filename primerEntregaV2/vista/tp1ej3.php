<?php
    $titulo="EJERCICIO 3 TP1";
    include_once("estructura/cabecera.php");
?>  
    <!-- <link rel="stylesheet" href="css/tp1ej3.css"> -->
    <p class="h3">CONSIGNA:</p>
<p class="lead">
Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias.
</p>
    <!-- <form class="needs-validation" novalidate method="post" action="accion/tp1accion3.php" onSubmit="return validar2('dato')" > -->
    <form class="needs-validation" novalidate method="post" action="accion/tp1accion3.php">
    <div class="card card-primary col-md-6">
        <!-- datos -->
            <div class="card-body">
                <!-- nombre -->
                <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control dato" name="nombre" id="nombre" pattern="\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+" required>
                    <div class="invalid-feedback">
                        Nombre debe comenzar con mayúscula y no poseer números.
                    </div>
                    <div class="valid-feedback">
                        Nombre correcto.
                    </div>
                </div>
                <!-- apellido -->
                <div class="form-group">
                    <label for="inputLastName">Apellido</label>
                    <input type="text" class="form-control dato" name="apellido" id="apellido" pattern="\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+" required>
                    <div class="invalid-feedback">
                        Apellido debe comenzar con mayúscula y no poseer números.
                    </div>
                    <div class="valid-feedback">
                        Apellido correcto.
                    </div>
                </div>
                <!-- edad -->
                <div class="form-group">
                    <label for="inputAge">Edad</label>
                    <input type="number" class="form-control dato" name="edad" id="edad" required>
                    <div class="invalid-feedback">
                        Valor de edad incorrecto.
                    </div>
                    <div class="valid-feedback">
                        Edad correcta.
                    </div>
                </div>
                <!-- direccion -->
                <div class="form-group">
                    <label for="inputAddres">Dirección</label>
                    <input type="text" class="form-control dato" name="direccion" id="direccion" required>
                    <div class="invalid-feedback">
                        Valor de dirección incorrecto.
                    </div>
                    <div class="valid-feedback">
                        Dirección correcta.
                    </div>
                </div>
            </div>
            <!-- submit -->
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>