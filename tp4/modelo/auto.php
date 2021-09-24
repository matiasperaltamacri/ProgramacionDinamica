<?php
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensaje;
    public function __construct()
    {
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->objPersona="";
        $this->mensaje="";
    }
    public function setear($datos){
        $this->setPatente($datos["patente"]);
        $this->setMarca($datos["marca"]);
        $this->setModelo($datos["modelo"]);
        $this->setObjPersona($datos["persona"]);
    }
    public function getPatente()
    {
        return $this->patente;
    }
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getObjPersona()
    {
        return $this->objPersona;
    }
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }
    public function cargar($flag){
        $resp=false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente= ".$this->getPatente();
        //echo $sql."\n";
        if ($base->Iniciar()){
            $res=$base->Ejecutar($sql);
            if ($res>-1){
                if ($res>0){
                    $row = $base->Registro();
                    $objPersona=null;
                    if ($flag){     //Si flag=true carga el objPersona. Evita bucles.
                        $objPersona=new Persona();
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar(false);
                        //print_r($objPersona);
                    }
                    $this->setear(["patente"=>$row['Patente'],"marca"=> $row['Marca'],"modelo"=> $row['Modelo'],"persona"=>$objPersona]);
                    $resp=true;
                }
            }
        }else{
            $this->setMensaje("auto->listar: ".$base->getError());
        }
        return $resp;
    }
    public function insertar(){
        $resp=false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente,Marca,Modelo,DniDuenio) VALUES ('".$this->getPatente()."','".$this->getMarca()."',".$this->getModelo().",".$this->getObjPersona()->getNroDni().")";
        //echo "sql: ".$sql."\n";
        if ($base->iniciar()){
            if ($base->Ejecutar($sql)){
                //$this->setId($elid); No es auto_increment
                $resp=true;
            }else{
                $this->setMensaje("Tabla->insertar: ".$base->getError());
            }
        }else{
            $this->setMensaje("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."', Modelo=".$this->getModelo().", DniDuenio=".$this->getObjPersona()->getNroDni()." WHERE Patente='".$this->getPatente()."'";
        //echo $sql."\n";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensaje("Tabla->modificar: ".$base->getError());
            }
        } else {
            $this->setMensaje("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente='".$this->getPatente()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensaje("Tabla->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensaje("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    public static function listar($flag,$parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        //echo "consulta: ".$sql."\n";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $objPersona=null;
                    if ($flag){
                        //Si $flag=true carga el objPersona. Evita bucles.
                        $objPersona=new Persona();
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar(false);
                        //print_r($objPersona);
                    }
                    $obj->setear(["patente"=>$row['Patente'],"marca"=> $row['Marca'],"modelo"=> $row['Modelo'],"persona"=>$objPersona]);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setMensaje("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }
}
?>