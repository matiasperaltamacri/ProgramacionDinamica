<?php
    $titulo="EJERCICIO 5 TP1 - VALIDACION BOOTSTRAP";
    include_once("estructura/cabecera.php");
?>  
    <link rel="stylesheet" href="css/tp1ej3.css">
    <h6>CONSIGNA:</h6>
    <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2- estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.</p>
    <form class="card row g-3 needs-validation" method="get" action="accion/tp1accion5.php" style="width:fit-content; margin:auto" novalidate>
        <div>
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="dato" id="nombre" pattern="[a-zA-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese nombre</div>
        </div>
        <div>
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" class="dato" id="apellido" pattern="[a-z A-Z]{1,}" required>
            <div class="invalid-feedback">Ingrese apellido</div>
        </div>
        <div>
            <label for="edad" class="form-label">Edad:</label>
            <input type="text" name="edad" class="dato" id="edad" pattern="[0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese edad</div>
        </div>
        <div>
            <label for="direccion" class="form-label">Direccion:</label>
            <input type="text" name="direccion" class="dato" id="direccion" pattern="[a-z A-Z 0-9]{1,}" required>
            <div class="invalid-feedback">Ingrese direccion</div>
        </div>
        <div>
            <label class="form-label">Estudios:</label>
            <div id="botones1">
                        <label for="est0" class="form-label">Sin Estudios</label>
                        <input class="form-check-input"  type="radio" id="est0" name="estudios" value="sin estudios" required>  
                        <label for="est1" class="form-label">Primarios</label>    
                        <input class="form-check-input" type="radio" id="est1" name="estudios" value="primario completo">
                        <label for="est2" class="form-label">Secundarios</label>
                        <input class="form-check-input" type="radio" id="est2" name="estudios" value="secundario completo">
                        <div class="invalid-feedback">Seleccione nivel de estudios</div>
            </div>
        </div>
        <div>
            <label class="form-label">Sexo:</label>
            <div>
                <label for="mujer" class="form-label">F</label>
                <input class="form-check-input" type="radio" id="mujer" name="sexo" value="mujer" required>
                <label for="hombre" class="form-label">M</label>
                <input class="form-check-input" type="radio" id="hombre" name="sexo" value="hombre">
                <div class="invalid-feedback">Seleccione un sexo</div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
<?php
    include_once("estructura/pie.php");
?>