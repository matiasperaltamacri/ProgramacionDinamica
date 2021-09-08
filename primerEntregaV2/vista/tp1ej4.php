<?php
    $titulo="EJERCICIO 4 TP1";
    include_once("estructura/cabecera.php");
?>
<!-- <link rel="stylesheet" href="css/tp1ej3.css"> -->
<p class="h3">CONSIGNA:</p>
<p class="lead">
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.
</p>
<form class="needs-validation" novalidate method="get" action="accion/tp1accion4.php">
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
    <!-- <form method="get" action="accion/tp1accion4.php" onSubmit="return validar2('dato')">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" class="dato"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" class="dato"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="text" name="edad" class="dato"></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" class="dato"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form> -->
<?php
    include_once("estructura/pie.php");
?>