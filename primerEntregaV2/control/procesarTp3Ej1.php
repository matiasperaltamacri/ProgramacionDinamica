<?php
class procesarTp3Ej1
{

    public function subirArchivo($datos)
    {
        $nombreArchivoTexto = $_FILES['texto']['name'];
        $dir = "../archivos/";

        $texto = "";
        $error = "";
        $todoOK = true;

        if ($nombreArchivoTexto != "") {
            if ($todoOK && $_FILES["texto"]["error"] <= 0) {
                $todoOK = true;
                $error = "";
            } else {
                $todoOK = false;
                $error = "ERROR: no se pudo cargar el archivo de texto. No se pudo acceder al archivo Temporal";
            }

            $tipoPdf = strpos(strtoupper($_FILES['texto']["type"]), "PDF");
            $tipoDoc = strpos(strtoupper($_FILES['texto']["type"]), "MSWORD");

            //Control del tipo.
            if ($todoOK && !$tipoPdf && !$tipoDoc) {
                $error = "ERROR: El archivo seleccionado no es un DOC o PDF";
                $todoOK = false;
            }

            //Controlar el tamaño
            if ($todoOK && $_FILES['texto']["size"] / 1024 > 2000) {
                $error = "ERROR: El archivo " . $nombreArchivoTexto . " supera los 2 MB.";
                $todoOK = false;
            }

        }

        // Copiar el archivo al servidor.
        if ($nombreArchivoTexto != "") {
            if ($todoOK && !copy($_FILES['texto']['tmp_name'], $dir . $nombreArchivoTexto)) {
                $error = "ERROR: no se pudo cargar el archivo de texto.";
                $todoOK = false;
            }
        }

        if (!$todoOK) {
            $texto = $error;
        }

        return $texto;
    }

    public function obtenerArchivos()
    {
        $directorio = "../archivos/";
        $archivos = scandir($directorio, 1);
        // scandir — Enumera los ficheros y directorios ubicados en la ruta especificada
        return $archivos;
    }

    public function abrirArchivo($datos)
    {
        $nombreArchivoTexto = $_FILES['texto']['name'];
        $dir = "../archivos/";
        $enlace = "";
        $i = 0;
        $seguir = true;
        while ($i < count($datos) && $seguir) {
            if ($datos[$i] == $nombreArchivoTexto) {
                $enlace = $dir . $datos[$i];
                $seguir = false;
            }
            $i++;
        }
        return $enlace;
    }
}
?>