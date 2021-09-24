<?php
$titulo="TP4 Ejercicio9";
include_once "../estructura/cabeceraAccion.php";
$datos=data_submitted();
$objAbmPers=new AbmPersona();
$objPers=$objAbmPers->buscarObjeto($datos,false);
if($objPers<>null){
    echo 
        "<form class='card needs-validate' method='GET' action='ActualizarDatosPersona.php' novalidate style='padding: 5px; width:300px; margin:auto'>
        <div>
            <label for='nombre' class='form-label'>Nombre</label>
            <input type='text' id='nombre' name='nombre' class='form-control' pattern='[a-z A-Z]{1,}' value='".$objPers->getNombre()."' required>
            <div class='invalid-feedback'>Ingrese nombre correctamente</div>
        </div>
        <div>
            <label for='apellido' class='form-label'>Apellido</label>
            <input type='text' id='apellido' name='apellido' class='form-control' pattern='[a-z A-Z]{1,}' value='".$objPers->getApellido()."' required>
            <div class='invalid-feedback'>Ingrese apellido correctamente</div>
        </div>
        <div>
            <label for='dni' class='form-label'>DNI</label>
            <input class='form-control' type='text' id='dni' name='dni' pattern='[0-9]{7,8}' value='".$objPers->getNroDni()."' readonly required>
            <div class='invalid-feedback'>Ingrese DNI correctamente</div>
        </div>
        <div>
            <label for='fechaNac' class='form-label'>Fecha de Nacimiento</label>
            <input type='text' id='fechaNac' name='fechaNac' placeholder='1999-12-25' class='form-control' pattern='[0-9 -]{10}' value='".$objPers->getFechaNac()."' required>
            <div class='invalid-feedback'>Ingrese Fecha correctamente</div>
        </div>
        <div>
            <label for='telefono' class='form-label'>Telefono</label>
            <input type='text' id='telefono' name='telefono' class='form-control' pattern='[0-9]{6,}' value='".$objPers->getTelefono()."' required>
            <div class='invalid-feedback'>Ingrese telefono correctamente</div>
        </div>
        <div>
            <label for='domicilio' class='form-label'>Domicilio</label>
            <input type='text' id='domicilio' name='domicilio' class='form-control' pattern='[a-z A-Z 0-9]{1,}' value='".$objPers->getDomicilio()."' required>
            <div class='invalid-feedback'>Ingrese domicilio correctamente</div>
        </div>
        <button class='btn btn-primary mt-3' type='submit'>Enviar</button>
        </form>";
}else{
    echo "No se encontraron datos en la Base con el dni ".$datos['dni'];
}
echo "<br/><button class='btn btn-info mt-5' onclick='window.history.back()'>Atras</button>";
?>

<?php
include_once "../estructura/pieAccion.php";
?>