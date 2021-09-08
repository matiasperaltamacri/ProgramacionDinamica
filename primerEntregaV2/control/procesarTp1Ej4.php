<?php
class procesarTp1Ej4
{

    public function procesarDatos($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $texto = "";
        $texto = "<p>Hola, yo soy ".$nombre." ".$apellido.", tengo ".$edad." años y vivo en ".$direccion."</p>";
        if($edad >= 18){
            $texto .= "<p>Soy mayor de edad</p>";
        }else{
            $texto .= "<p>Soy menor de edad</p>";
        }
        return $texto;
    }

}
?>