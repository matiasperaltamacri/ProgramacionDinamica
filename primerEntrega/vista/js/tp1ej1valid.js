function validar(){
    resp=true;
    var dato= document.getElementById("datoForm").value;
    if (dato==""){
        alert ("Los datos son requeridos");
        resp=false;
    }
    else if (isNaN(dato)){
        alert ("Debe ingresar un numero");
        resp=false;
    }
    return resp;
}