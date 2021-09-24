<?php
    include_once("../modelo/conector/baseDatos.php");
    include_once("../modelo/auto.php");
    include_once("../modelo/persona.php");

    $objPersona=new Persona();
    $objPersona->setear(["dni"=>25963874,"nombre"=>"Julio","apellido"=>"Sanchez","fechaNac"=>"1983-12-01","telefono"=>154219685,"domicilio"=>"Yrigoyen 112","colAutos"=>[]]);
    $objAuto=new Auto();
    $objAuto->setear(["patente"=>"PJD 557","marca"=>"Dodge","modelo"=>2010,"persona"=>$objPersona]);
    //
    //*INSERTAR
    //
    if($objAuto->insertar()){
        echo "El objeto se inserto correctamente<br/>";
        print_r($objAuto);
    }else{
        echo "El objeto no se inserto\n";
        echo $objAuto->getMensaje();
    }
    //
    //*MODIFICAR
    //
    $objAuto->setMarca("BMW");
    $objAuto->setModelo(2013);
    if ($objAuto->modificar()){
        echo "El objeto se modifico correctamente<br/>";
        print_r($objAuto);
    }else{
        echo "El objeto no se modifico\n";
        echo $objAuto->getMensaje();
    }
    //
    //*ELIMINAR
    //
    if ($objAuto->eliminar()){
        echo "El objeto se elimino correctamente<br/>";
    }else{
        echo "El objeto no se elimino\n";
        echo $objAuto->getMensaje();
    }
    //
    //*LISTAR
    //
    if ($res=$objAuto->listar(true)){
        echo "Lista creada<br/>";
        print_r($res);
    }else{
        echo "No se pudo crear la lista\n";
        echo $objAuto->getMensaje();
    }
?>