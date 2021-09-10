<?php
    class control_tp1ej1{
        public function verNum($datos){
            $numero = $datos['numero'] ;
            $texto= "N&uacute;mero: $numero <br />";
            if ($numero==0){
                $texto.="El numero es nulo<br/>";
            }
            else if($numero>0){
                $texto.="El numero es positivo<br/>";
            }
            else if ($numero<0){
                $texto.="El numero es negativo<br/>";
            }
            return $texto;
        }
    }
?>