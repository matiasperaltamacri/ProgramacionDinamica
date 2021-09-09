<?php
class procesarTp3Ej3
{
    public function mostrar($datos)
    {
        $titulo = $datos['titulo'];
        $actores = $datos['actores'];
        $director = $datos['director'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos['año'];
        $nacionalidad = $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion = $datos['duracion'];
        $edad = $datos['edad'];
        $sinopsis = $datos['sinopsis'];
        $texto = "<strong>Título:</strong> " . $titulo . "<br/><strong>Actores:</strong> " . $actores . "<br/><strong>Director:</strong> " . $director . "<br/><strong>Guión:</strong> " . $guion . "<br/><strong>Producción:</strong> " . $produccion . "<br/><strong>Año:</strong> " . $anio . "<br/><strong>Nacionalidad:</strong> " . $nacionalidad . "<br/><strong>Género:</strong> " . $genero . "<br/><strong>Duración:</strong> " . $duracion . "<br/><strong>Restricciones de edad:</strong> " . $edad . "<br/>";
        if (!($sinopsis == "null")) {
            $texto .= "<strong>Sinopsis: </strong>" . $sinopsis . "<br/>";
        }
        return $texto;
    }

    public function cargarImagen($datos)
    {
        $nombreArchivoImagen = $_FILES['imagen']['name'];
        $dir = "../archivos/";

        $arrayRespuesta = array();
        $arrayRespuesta["respCarga"] = "";
        $arrayRespuesta["enlace"] = "";
        
        $texto = "";
        $error = "";
        $todoOK = true;

        if ($nombreArchivoImagen != "") {
            if ($todoOK && $_FILES["imagen"]["error"] <= 0) {
                $todoOK = true;
                $error = "";
            } else {
                $todoOK = false;
                $error = "ERROR: no se pudo cargar la imagen. No se pudo acceder al archivo Temporal";
            }

            $tipoJpeg = strpos(strtoupper($_FILES['imagen']["type"]), "JPEG");
            $tipoPng = strpos(strtoupper($_FILES['imagen']["type"]), "PNG");

            //Control del tipo .
            if ($todoOK && !$tipoJpeg && !$tipoPng) {
                $error = "ERROR: El archivo seleccionado no es una imagen.";
                $todoOK = false;
            }

        }
        // Copiar el archivo al servidor.
        if ($nombreArchivoImagen != "") {
            if ($todoOK && !copy($_FILES['imagen']['tmp_name'], $dir . $nombreArchivoImagen)) {
                $error = "ERROR: no se pudo cargar el archivo de imagen.";
                $todoOK = false;
            }
        }

        if (!$todoOK) {
            $texto = $error;
            $arrayRespuesta["respCarga"] = $texto;
        }else{
            $arrayRespuesta["enlace"] = $dir . $nombreArchivoImagen;
        }

        return $arrayRespuesta;
    }
}
