<?php
    $titulo = "Ejercicio 3 TP3";
    include_once("estructura/cabecera.php");
?>  
    <div class="contenido">
    <form class="mt-5 mb-5 needs-validation" method="post" action="accion/tp3accion3.php" style="width:700px; border:lightgrey 1px solid; margin:auto" enctype="multipart/form-data" novalidate>
        <div style="background-color: #DCDCDC;color:#077FAF; border-bottom:lightgrey 1px solid"><h5 style="padding:4px 0 0 15px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>Cinem@s</h5></div>
        
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="titulo" class="form-label"><strong>Título</strong></label>
                </div>
                <div class="col">
                    <label for="actores" class="form-label"><strong>Actores</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" required>
                    <div class="invalid-feedback" id="titulo-text">Debe ingresar un título válido</div>
                </div>
                <div class="col">
                    <input type="text" id="actores" name="actores" class="form-control" placeholder="Actores" required>
                    <div class="invalid-feedback" id="actores-text">Campo de actores incorrecto</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="director" class="form-label"><strong>Director</strong></label>
                </div>
                <div class="col">
                    <label for="guion" class="form-label"><strong>Guión</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" id="director" name="director" class="form-control" placeholder="Director" required>
                    <div class="invalid-feedback" id="director-text">Ingrese el director/a de la pelicula</div>
                </div>
                <div class="col">
                    <input type="text" id="guion" name="guion" class="form-control" placeholder="Guion" required>
                    <div class="invalid-feedback" id="guion-text">Ingrese al guionista de la pelicula</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="produccion" class="form-label"><strong>Producción</strong></label>
                </div>
                <div class="col">
                    <label for="año" class="form-label"><strong>Año</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" id="produccion" name="produccion" class="form-control" placeholder="Producción" required>
                    <div class="invalid-feedback" id="produccion-text">Ingrese productor de la pelicula</div>
                </div>
                <div class="col-3">
                    <input type="text" id="año" name="año" class="form-control" maxlength="4" pattern="[0-9]{4}" placeholder="Año" required>
                    <div class="invalid-feedback" id="año-text">Ingrese año</div>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <label for="nacionalidad" class="form-label"><strong>Nacionalidad</strong></label>
                </div>
                <div class="col">
                    <label for="genero" class="form-label"><strong>Género</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" placeholder="Nacionalidad" required>
                    <div class="invalid-feedback" id="nacionalidad-text">Ingrese nacionalidad</div>
                </div>
                <div class="col-3">
                    <select name="genero" class="form-select" required>
                        <option selected disabled></option>
                        <option value="comedia">Comedia</option>
                        <option value="accion">Acción</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="ficcion">Ciencia Ficción</option>
                    </select>
                    <div class="invalid-feedback" id="genero-text">Seleccione el género</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="duracion" class="form-label"><strong>Duración</strong></label>
                </div>
                <div class="col">
                    <label for="edad" class="form-check-label"><strong>Restricción de edad</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="text" name="duracion" id="duracion" class="form-control" maxlength="3" pattern="[0-9]{2,3}" placeholder="Duración" required>
                    <small>(minutos)</small>
                    <div class="invalid-feedback" id="duracion-text">Ingrese duración</div>
                </div>
                <div class="col" >
                    <input class="form-check-input" type="radio" name="edad" value="Todo publico" id="edad" required>
                    <small>Todo publico</small>
                    <input class="form-check-input" type="radio" name="edad" value="Mayores de 7" id="edad">
                    <small>Mayores de 7</small>
                    <input class="form-check-input" type="radio" name="edad" value="Mayores de 18" id="edad">
                    <small>Mayores de 18</small>
                    <div class="invalid-feedback" id="restriccion-text">Debe seleccionar la restricción de edad</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="imagen" class="form-label"><strong>Cargar Imagen</strong></label> 
                <div class="col">
                    <input type="file" name="imagen" id="imagen" required>
                    <small class="text-muted">Formatos permitidos: .jpeg y .png</small>
                    <div class="invalid-feedback">Seleccione una imagen de su equipo</div>
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
                <div class="col-3 mb-3 d-flex">
                    <button class="btn btn-primary text-white" type="submit">Enviar</button>
                    <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                </div>
                
            </div>
            
        </div>
        
    </form>
    </div>
<?php

include_once("estructura/pie.php");
?>


