<?php
    $titulo="Ejercicio 4 TP2";
    include_once("estructura/cabecera.php");
?>

<form class="mt-5 needs-validation mb-5" method="post" action="accion/tp2accion4.php" style="width:700px; border:lightgrey 1px solid; margin:auto" novalidate>
    <div style="background-color: #DCDCDC;color:#077FAF; border-bottom:lightgrey 1px solid"><h5 style="padding:4px 0 0 15px">Cinem@s</h5></div>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="titulo" class="form-label"><strong>Titulo</strong></label>
            </div>
            <div class="col">
                <label for="actores" class="form-label"><strong>Actores</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="col">
                <input type="text" id="actores" name="actores" class="form-control" placeholder="Actores" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="director" class="form-label"><strong>Director</strong></label>
            </div>
            <div class="col">
                <label for="guion" class="form-label"><strong>Guion</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" id="director" name="director" class="form-control" placeholder="Director" required>
            </div>
            <div class="col">
                <input type="text" id="guion" name="guion" class="form-control" placeholder="Guion" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="produccion" class="form-label"><strong>Produccion</strong></label>
            </div>
            <div class="col">
                <label for="año" class="form-label"><strong>Año</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" id="produccion" name="produccion" class="form-control" required>
            </div>
            <div class="col-3">
                <input type="text" id="año" name="año" class="form-control" maxlength="4" pattern="[0-9]{4}" required>
                <div class="invalid-feedback" id="año-text">Ingrese año</div>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <label for="nacionalidad" class="form-label"><strong>Nacionalidad</strong></label>
            </div>
            <div class="col">
                <label for="genero" class="form-label"><strong>Genero</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
            </div>
            <div class="col-3">
                <select name="genero" class="form-select" required>
                    <option selected disabled></option>
                    <option value="comedia">Comedia</option>
                    <option value="accion">Accion</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="ficcion">Ciencia Ficcion</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="duracion" class="form-label"><strong>Duracion</strong></label>
            </div>
            <div class="col">
                <label for="edad" class="form-check-label"><strong>Restriccion de edad</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <input type="text" name="duracion" id="duracion" class="form-control" maxlength="3" pattern="[0-9]{2,3}" required>
                <small>(minutos)</small>
                <div class="invalid-feedback" id="duracion-text">Ingrese duracion</div>
            </div>
            <div class="col" >
                <input class="form-check-input" type="radio" name="edad" value="Todo publico" id="edad" required>
                <small>Todo publico</small>
                <input class="form-check-input" type="radio" name="edad" value="Mayores de 7" id="edad">
                <small>Mayores de 7</small>
                <input class="form-check-input" type="radio" name="edad" value="Mayores de 18" id="edad">
                <small>Mayores de 18</small>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="sinopsis" id="sinopsis"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn" type="reset">Borrar</button>
            </div>
            
        </div>
        
    </div>
    
</form>

<?php
    include_once("estructura/pie.php");
?>
