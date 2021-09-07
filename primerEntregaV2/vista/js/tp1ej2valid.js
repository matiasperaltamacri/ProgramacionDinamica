function validar2($param){
    arreglo= document.getElementsByClassName($param);
    valor=true;
    for (var i=0;i<arreglo.length;i++){   
        arreglo[i].style="background:white";    
    }
    for (var i=0;i<arreglo.length;i++){
        if (arreglo[i].value==""){
            valor=false;            
            arreglo[i].style="background:red";            
        }
    }
    if (!valor){
        alert ("Llene todos los campos");
    }
    return valor;
}