<?php
    $titulo="EJERCICIO 1 TP3";
    include_once("../estructura/cabeceraAccion.php");
    if($_FILES['miArchivo']["error"]<=0){
        if ((($_FILES['miArchivo']['type']=="application/pdf")||($_FILES['miArchivo']['type']=="application/msword"))&&($_FILES["miArchivo"]["size"] < 2097152)){
            $dir="archivos/";
            if(!copy($_FILES['miArchivo']['tmp_name'],$dir.$_FILES['miArchivo']['name'])){
                echo "ERROR. No se pudo cargar el archivo";
            }else{
                $link=$dir.$_FILES['miArchivo']['name'];
                echo "El archivo: ".$_FILES['miArchivo']['name']." se ha copiado con éxito.<br/>";
                echo "<a href='$link'>Ubicacion del archivo</a>";
            }
        }else{
            echo "ERROR. El archivo no fue guardado. Debe ser un pdf/doc no superior a 2mb.<br/>";
        }
        
    }else{
        echo "ERROR. No se pudo cargar/acceder el archivo.<br/>";
    }
    include_once("../estructura/pieAccion.php");
?>