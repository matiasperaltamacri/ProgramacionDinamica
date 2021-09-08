<?php
class vernumero{
    public function verificarDatos($datos){
        $numero = $datos['numero'];
        $texto = "";
        if($numero == 0){
            $texto = "<p>Número: ".$numero."</p>";
            $texto .="<p>El número es nulo.</p>";
        }elseif ($numero > 0) {
            $texto = "<p>Número: ".$numero."</p>";
            $texto .="<p>El número es positivo.</p>";
        }else{
            $texto = "<p>Número: ".$numero."</p>";
            $texto .="<p>El número es negativo.</p>";
        }
        return $texto;
    }
}
?>