<?php
    class control_tp1ej4{
        public function mostrar($datos){
            $edad=$datos['edad'];
            $nombre=$datos['nombre'];
            $apellido=$datos['apellido'];        
            $direccion=$datos['direccion'];
            if ($edad<18){
                
                $texto= "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion.<br/>";
            }
            else{
                $texto= "Hola, yo soy $nombre $apellido, soy mayor de edad y vivo en $direccion.<br/>";
            }
            return $texto;
        }
    }
?>