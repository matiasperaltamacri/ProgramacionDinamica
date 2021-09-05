<?php
    $titulo="EJERCICIO 6 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if($_GET){
        $edad=$_GET['edad'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];        
        $direccion=$_GET['direccion'];
        $estudios=$_GET['estudios'];
        $sexo=$_GET['sexo'];
        if ($edad<18){
            
            echo "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion. Soy $sexo y mi nivel de estudios es: $estudios.<br/>";
        }
        else{
            echo "Hola, yo soy $nombre $apellido, soy mayor de edad y vivo en $direccion. Soy $sexo y mi nivel de estudios es: $estudios.<br/>";
        }
        if (!empty($_GET['deporte'])){
            echo "Deportes que practico:<br/>";
            foreach ($_GET['deporte'] as $selected){
                echo $selected."<br/>";
            }
        }
    }
    else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>