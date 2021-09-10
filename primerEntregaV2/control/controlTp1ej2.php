<?php
    class control_tp1ej2{
        public function sumaHoras($datos){
            $suma=0;
            $arreglo[0]= $_GET["lunes"];
            $arreglo[1]= $_GET['martes'];
            $arreglo[2]= $_GET['miercoles'];
            $arreglo[3]= $_GET['jueves'];
            $arreglo[4]= $_GET['viernes'];
            for ($i=0;$i<=4;$i++){
                $suma=$suma+$arreglo[$i];
            }
            return "El resultado es: $suma <br/>";
        }
    }
?>