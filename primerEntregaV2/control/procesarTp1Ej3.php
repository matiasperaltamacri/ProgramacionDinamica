<?php
class procesarTp1Ej3
{

    public function procesarDatos($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $texto = "";
        $texto = "Hola, yo soy ".$nombre." ".$apellido.", tengo ".$edad." años y vivo en ".$direccion;
        return $texto;
    }

}
?>