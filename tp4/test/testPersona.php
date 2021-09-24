<?php
    include_once("../modelo/conector/baseDatos.php");
    include_once("../modelo/auto.php");
    include_once("../modelo/persona.php");

    $objPersona=new Persona();
    $objPersona->setear(["dni"=>33963874,"nombre"=>"Julio","apellido"=>"Sanchez","fechaNac"=>"1983-12-01","telefono"=>154219685,"domicilio"=>"Yrigoyen 112","colAutos"=>[]]);
    //
    //*INSERTAR
    //
    if($objPersona->insertar()){
        echo "El objeto se inserto correctamente<br/>";
        print_r($objPersona);
    }else{
        echo "El objeto no se inserto\n";
        echo $objPersona->getMensaje();
    }
    trim(fgets(STDIN));
    //
    //*MODIFICAR
    //
    $objPersona->setNombre("Harry");
    $objPersona->setApellido("Potter");
    $objPersona->setTelefono(15412345);
    $objPersona->setDomicilio("Calle Diagon 23");
    $objPersona->setFechaNac("1991-05-22");
    if ($objPersona->modificar()){
        echo "El objeto se modifico correctamente<br/>";
        print_r($objPersona);
    }else{
        echo "El objeto no se modifico\n";
        echo $objPersona->getMensaje();
    }
    trim(fgets(STDIN));
    //
    //*ELIMINAR
    //
    if ($objPersona->eliminar()){
        echo "El objeto se elimino correctamente<br/>";
    }else{
        echo "El objeto no se elimino\n";
        echo $objPersona->getMensaje();
    }
    trim(fgets(STDIN));
    //
    //*LISTAR
    //
    if ($res=$objPersona->listar(true)){
        echo "Lista creada<br/>";
        print_r($res);
    }else{
        echo "No se pudo crear la lista\n";
        echo $objPersona->getMensaje();
    }
?>