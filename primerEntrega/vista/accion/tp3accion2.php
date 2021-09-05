<?php
    $titulo="EJERCICIO 2 TP3";
    include_once("../estructura/cabeceraAccion.php");
    if($_FILES['miArchivo']["error"]<=0){
        if($_FILES['miArchivo']['type']=="text/plain"){
            $dir='../archivos/';
            if(copy($_FILES['miArchivo']['tmp_name'],$dir.$_FILES['miArchivo']['name'])){
                $nombre=$_FILES['miArchivo']['name'];
                $str=$dir.$nombre;
                $contenido=file_get_contents($str);
                echo "Contenido del archivo txt:<br/><textarea cols='70' rows='20'>$contenido</textarea>";
            }
                
        }else{
            echo "El archivo subido debe ser de tipo txt<br/>";
        }
    }else{
        echo "ERROR. No se pudo cargar/acceder el archivo.<br/>";
    }
    include_once("../estructura/pieAccion.php");
?>