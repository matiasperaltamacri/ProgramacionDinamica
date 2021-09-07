<?php
    $titulo="EJERCICIO 7 TP1";
    include_once("../estructura/cabeceraAccion.php");
    if ($_GET){
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
        $opera=$_GET['tipo'];
        if ($opera=="SUMA"){
            $res=$num1+$num2;
        }elseif($opera=="RESTA"){
            $res=$num1-$num2;
        }elseif($opera=="MULTIPLICACION"){
            $res=$num1*$num2;
        }else{
            $res=$num1/$num2;
        }
        echo "Numero 1: $num1<br/>Numero 2: $num2<br/>Operación: $opera<br/>Resultado: $res<br/>";
    }else{
        echo "No se recibieron datos.";
    }
    include_once("../estructura/pieAccion.php");
?>