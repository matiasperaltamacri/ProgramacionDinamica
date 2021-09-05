function validNum(){
    $anio=document.getElementById("año");
    $duracion=document.getElementById("duracion");
    $valido= true;
    if (isNaN($anio.value)){
        $anio.value=null;
        $msj1=document.getElementById("año-text");
        $msj1.innerHTML="Ingrese un número";
        $valido=false;
    }
    if (isNaN($duracion.value)){
        $duracion.value=null;
        $msj2=document.getElementById("duracion-text");
        $msj2.innerHTML="Ingrese un número";
        $valido=false;
    }
    return $valido;
}