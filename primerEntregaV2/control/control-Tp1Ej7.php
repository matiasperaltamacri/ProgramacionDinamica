<?php
    class control_tp1ej7{
        public function calcula($datos){
            $num1=$datos['num1'];
            $num2=$datos['num2'];
            $opera=$datos['tipo'];
            if ($opera=="SUMA"){
                $res=$num1+$num2;
            }elseif($opera=="RESTA"){
                $res=$num1-$num2;
            }elseif($opera=="MULTIPLICACION"){
                $res=$num1*$num2;
            }else{
                $res=$num1/$num2;
            }
            return "Numero 1: $num1<br/>Numero 2: $num2<br/>Operación: $opera<br/>Resultado: $res<br/>";
        }
    }
?>