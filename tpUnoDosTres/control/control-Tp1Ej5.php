<?php
    class control_tp1ej5{
        public function mostrar($datos){
            $edad=$datos['edad'];
            $nombre=$datos['nombre'];
            $apellido=$datos['apellido'];        
            $direccion=$datos['direccion'];
            $estudios=$datos['estudios'];
            $sexo=$datos['sexo'];
            if ($edad<18){
                $texto= "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion. Soy $sexo y mi nivel de estudios es: $estudios.<br/>";
            }
            else{
                $texto= "Hola, yo soy $nombre $apellido, soy mayor de edad y vivo en $direccion. Soy $sexo y mi nivel de estudios es: $estudios.<br/>";
            }
            return $texto;
        }
    }
?>