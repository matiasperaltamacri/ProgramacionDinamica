//JS para validacion del ejercicio 3 TP2
function validar(){
    $pass=document.getElementById("password");
    $passValor=$pass.value;
    $valido=true;
    if ($passValor.length<8){
        $valido=false;
    }
    $arregloPass=$passValor.split("");
    $letra=false;
    $numero=false;
    for ($i=0;$i<$passValor.length;$i++){
        if (isNaN($arregloPass[$i])){
            $letra=true;
            
        }else{
            $numero=true;
        }
    }
    if (!$letra || !$numero){
        $valido=false;
    }
    if(!$valido){
        $pass.value=null;
        $passHelp=document.getElementById("pass-text");
        $passHelp.innerHTML="Debe tener al menos 8 caracteres, 1 letra y 1 número. ";
    }
    var $usuario=document.getElementById("usuario");
    
    if ($passValor==$usuario.value){
        $valido=false;
        $pass.value=null;
        $passHelp=document.getElementById("pass-text");
        $passHelp.innerHTML+="La clave no puede ser igual al usuario.";
    }
    return $valido;
}