function validar3(){
    limpiar();
    $valido=true;
    $nombre=document.getElementById("nombre");
    $apellido=document.getElementById("apellido");
    $edad=document.getElementById("edad");
    $direccion=document.getElementById("direccion");
    $estudios=document.getElementsByName("estudios");
    $sexo=document.getElementsByName("sexo");
    $valido=texto($nombre);
    $valido=texto($apellido);
    $valido=texto($edad);
    $valido=texto($direccion);
    
    $checkRadio=false; 
    $checkEstudios=false;    
    
    for ($i=0;$i<$sexo.length;$i++){
        if($sexo[$i].checked){
            $checkRadio=true;
        }
    }
    for ($i=0;$i<$estudios.length;$i++){
        if($estudios[$i].checked){
            $checkEstudios=true;
        }
    }
    if (!$checkEstudios){
        $botones=document.getElementById("botones1");
        $botones.style="color:red; font-weight:bold";
        $valido=false;
    }
    if (!$checkRadio){
        $botones=document.getElementById("botones2");
        $botones.style="color:red; font-weight:bold";
        $valido=false;
    }
    
    if (!$valido){
        alert ("Complete todos los campos");
    }
    return $valido;
}
function limpiar(){
    $botones1=document.getElementById("botones1");
    $botones2=document.getElementById("botones2");
    $botones1.style="default";
    $botones2.style="default";
    $nombre=document.getElementById("nombre");
    $apellido=document.getElementById("apellido");
    $edad=document.getElementById("edad");
    $direccion=document.getElementById("direccion");
    $nombre.style="default";
    $apellido.style="default";
    $edad.style="default";
    $direccion.style="default";
}
function texto($campo){
    $valido=true;
    if ($campo.value==""){
        $campo.style="background:red";
        $valido=false;
    }
    return $valido;
}