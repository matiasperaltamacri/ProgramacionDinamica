<?php
    $titulo="EJERCICIO 6 TP1";
    include_once("estructura/cabecera.php");
?>      
    <link rel="stylesheet" href="css/tp1ej3.css">
    <h6>CONSIGNA:</h6>
    <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</p>
    <form method="get" action="accion/tp1accion6.php" onSubmit="return validar3()">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" id="apellido"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="text" name="edad" id="edad"></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" id="direccion"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    Estudios<br/>
                    <div id="botones1">
                        Sin Estudios <input type="radio" name="estudios" value="sin estudios">      
                        Primarios <input type="radio" name="estudios" value="primario completo">
                        Secundarios <input type="radio" name="estudios" value="secundario completo">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Sexo<br/>
                    <div id="botones2">F<input type="radio" name="sexo" value="mujer" style="background:blue"> M<input type="radio" name="sexo" value="hombre"></div>  
                </td>
            </tr>
            <tr>
                <td>
                    Deportes<br/>
                    Futbol<input type="checkbox" name="deporte[]" value="Futbol"><br/>
                    Basketball<input type="checkbox" name="deporte[]" value="Basketball"><br/>
                    Rugby<input type="checkbox" name="deporte[]" value="Rugby"><br/>
                    Tenis<input type="checkbox" name="deporte[]" value="Tenis"><br/>
                </td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
<?php
    include_once("estructura/pie.php");
?>
