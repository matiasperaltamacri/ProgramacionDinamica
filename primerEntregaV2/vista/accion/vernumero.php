<?php
    $titulo="EJERCICIO 1 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if ($_POST){
        $numero = $_POST['numero'] ;
        echo "N&uacute;mero: $numero <br />";
        if ($numero==0){
            echo "El numero es nulo<br/>";
        }
        else if($numero>0){
            echo "El numero es positivo<br/>";
        }
        else if ($numero<0){
            echo "El numero es negativo<br/>";
        }
    }
    else{
        echo "No se recibieron datos<br />";
    }          
    echo '<a href="../index.php"><button> Regresar ← </button></a>';
    include_once("../estructura/pieAccion.php");
?>