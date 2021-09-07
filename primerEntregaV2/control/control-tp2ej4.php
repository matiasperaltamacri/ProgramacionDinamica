<?php
    class control_ej4{
        public function mostrar($datos){
            $titulo=$datos['titulo'];
            $actores=$datos['actores'];
            $director=$datos['director'];
            $guion=$datos['guion'];
            $produccion=$datos['produccion'];
            $anio=$datos['año'];
            $nacionalidad=$datos['nacionalidad'];
            $genero=$datos['genero'];
            $duracion=$datos['duracion'];
            $edad=$datos['edad'];
            $sinopsis=$datos['sinopsis'];
            $texto= "<strong>Título:</strong> ".$titulo."<br/><strong>Actores:</strong> ".$actores."<br/><strong>Director:</strong> ".$director."<br/><strong>Guión:</strong> ".$guion."<br/><strong>Producción:</strong> ".$produccion."<br/><strong>Año:</strong> ".$anio."<br/><strong>Nacionalidad:</strong> ".$nacionalidad."<br/><strong>Género:</strong> ".$genero."<br/><strong>Duración:</strong> ".$duracion."<br/><strong>Restricciones de edad:</strong> ".$edad."<br/>";
            if (!($sinopsis=="null")){
                $texto.="<strong>Sinopsis: </strong>".$sinopsis."<br/>";
            }
            return $texto;
        }
    }
?>