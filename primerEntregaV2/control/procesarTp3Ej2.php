<?php
class procesarTp3Ej2{
    public function subirArchivo($datos)
    {
        $nombreArchivoTexto = $_FILES['miArchivo']['name'];
        $dir = "../archivos/";

        $texto = "";
        $error = "";
        $todoOK = true;

        if ($nombreArchivoTexto != "") {
            if ($todoOK && $_FILES["miArchivo"]["error"] <= 0) {
                $todoOK = true;
                $error = "";
            } else {
                $todoOK = false;
                $error = "ERROR: no se pudo cargar el archivo de texto. No se pudo acceder al archivo Temporal";
            }

            $tipoTxt = strpos(strtoupper($_FILES['miArchivo']["type"]), "PLAIN");

            //Control del tipo .
            if ($todoOK && !$tipoTxt) {
                $error = "ERROR: El archivo seleccionado no es un TXT";
                $todoOK = false;
            }

        }

        // Copiar el archivo al servidor.
        if ($nombreArchivoTexto != "") {
            if ($todoOK && !copy($_FILES['miArchivo']['tmp_name'], $dir . $nombreArchivoTexto)) {
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
        $nombreArchivoTexto = $_FILES['miArchivo']['name'];
        $dir = "../archivos/";
        $contents = "";
        $i = 0;
        $seguir = true;
        while ($i < count($datos) && $seguir) {
            if ($datos[$i] == $nombreArchivoTexto) {
                $enlace = $dir . $datos[$i];
                // get contents of a file into a string
                $handle = fopen($enlace, "r");
                if(filesize($enlace) > 0){
                    $contents = fread($handle, filesize($enlace));
                }else{
                    $contents = "Archivo vacío";
                }
                fclose($handle);
                $seguir = false;
            }
            $i++;
        }
        return $contents;
        /**
         *  fopen solo abre un "puntero" al archivo.
         *  para leer el contenido usar la funcion fread
         *  luego cerrar el archivo tambien.
         *  Siempre que hay una lectura de archivo hay 3 funciones ;
         *  apertura, lectura y cierre
         */
    }
}
?>