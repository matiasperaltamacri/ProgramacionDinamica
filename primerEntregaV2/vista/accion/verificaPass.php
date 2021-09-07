<?php
    $titulo="EJERCICIO 3 TP2";
    include_once("../estructura/cabeceraAccion.php");
	$arreglo=[['usuario'=>'lupino','pass'=>'pieFiesta12'],
            ['usuario'=>'bilbo','pass'=>'01ring66'],
            ['usuario'=>'harry','pass'=>'wand9988'],
            ['usuario'=>'poppins','pass'=>'paraguas357']];
    if($_POST){
        $usuario=($_POST['usuario']);
        $pass=$_POST['password'];
        $found=false;
        $i=0;
        do{
            if ($usuario==($arreglo[$i]['usuario'])){
                if ($pass==($arreglo[$i]['pass'])){
                    echo "Bienvenido $usuario<br>";
                    $found=true;
                }
            }
            $i++;
        }while($i<count($arreglo)&&(!$found));
        if (!$found){
            echo "ERROR! Usuario/contraseña incorrecto<br>";
        }
    }else{
        echo"No se recibieron datos";
    }
    include_once("../estructura/pieAccion.php");
?>