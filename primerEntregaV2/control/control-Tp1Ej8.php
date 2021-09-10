<?php
    class control_tp1ej8{
        public function mostrar($datos){
            $edad=$datos['edad'];
            $estudia=$datos['estudiante'];
            if ($estudia=="si" || $edad<12){
                $importe=160;
                if ($edad>=12){
                    $importe+=20;
                }
            }else{
                $importe=300;
            }
            return "Tarifa del cliente: $$importe<br/>";
        }
    }
?>