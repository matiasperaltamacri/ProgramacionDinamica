<?php
    class control_tp2ej3{
        public function mostrar($datos){
            $arreglo=[['usuario'=>'lupino','pass'=>'pieFiesta12'],
            ['usuario'=>'bilbo','pass'=>'01ring66'],
            ['usuario'=>'harry','pass'=>'wand9988'],
            ['usuario'=>'poppins','pass'=>'paraguas357']];
            //arreglo con datos que verifican si el usuario ingresado ya esta registrado
            $usuario=($datos['usuario']);
            $pass=$datos['password'];
            $found=false;
            $i=0;
            $texto="";
            do{
                if ($usuario==($arreglo[$i]['usuario'])){
                    if ($pass==($arreglo[$i]['pass'])){
                        $texto= "Bienvenido $usuario<br>";
                        $found=true;
                    }
                }
                $i++;
            }while($i<count($arreglo)&&(!$found));
            if (!$found){
                $texto= "ERROR! Usuario/contraseña incorrecto<br>";
            }
            return $texto;
        }
    }
?>