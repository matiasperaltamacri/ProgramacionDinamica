<?php
class Persona{
    private $nroDni;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $colAutos;
    private $mensaje;
    public function __construct()
    {
        $this->nroDni="";
        $this->nombre="";
        $this->apellido="";
        $this->fechaNac="";
        $this->telefono="";
        $this->domicilio="";
        $this->colAutos=[];
    }
    public function setear($datos){
        $this->nroDni=$datos["dni"];
        $this->nombre=$datos["nombre"];
        $this->apellido=$datos["apellido"];
        $this->fechaNac=$datos["fechaNac"];
        $this->telefono=$datos["telefono"];
        $this->domicilio=$datos["domicilio"];
        $this->colAutos=$datos["colAutos"];
    }
    public function cargar($verCol){
        $resp=false;
        $base=new BaseDatos();
        $sql="SELECT * FROM persona WHERE NroDni= ".$this->getNroDni();
        //echo $sql;
        if ($base->Iniciar()){
            $res=$base->Ejecutar($sql);
            if ($res>-1){
                if ($res>0){
                    $row = $base->Registro();
                    $coleccion=null;
                    if ($verCol){
                        //Si es true, busca en la BD los Autos asociados al nroDni. Evita bucles.
                        $objAuto=new Auto();
                        $consulta="DniDuenio=".$this->getNroDni();
                        $coleccion=$objAuto->listar(false,$consulta);
                    }
                    $this->setear(["dni"=>$row['NroDni'],"nombre"=>$row['Nombre'],"apellido"=>$row['Apellido'],"fechaNac"=>$row['fechaNac'],"telefono"=>$row['Telefono'],"domicilio"=>$row['Domicilio'],"colAutos"=>$coleccion]);
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
        $sql="INSERT INTO persona(NroDni,Nombre,Apellido,fechaNac,Telefono,Domicilio) VALUES (".$this->getNroDni().",'".$this->getNombre()."','".$this->getApellido()."','".$this->getFechaNac()."',".$this->getTelefono().",'".$this->getDomicilio()."')";
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
        $sql="UPDATE persona SET Nombre='".$this->getNombre()."', Apellido='".$this->getApellido()."',fechaNac='".$this->getFechaNac()."',Telefono=".$this->getTelefono().",Domicilio='".$this->getDomicilio()."' WHERE NroDni=".$this->getNroDni();
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
        $sql="DELETE FROM persona WHERE NroDni='".$this->getNroDni()."'";
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
        $sql="SELECT * FROM persona ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        //echo "consulta: ".$sql."\n";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Persona();
                    $coleccion=null;
                    if ($flag){
                        //Completa la colAutos si LISTAR no fue llamado desde la clase AUTO. Evita bucles.
                        $objAuto=new Auto();
                        $coleccion=$objAuto->listar(false,"DniDuenio=".$row['NroDni']);

                    }
                    $obj->setear(["dni"=>$row['NroDni'],"nombre"=>$row['Nombre'],"apellido"=>$row['Apellido'],"fechaNac"=>$row['fechaNac'],"telefono"=>$row['Telefono'],"domicilio"=>$row['Domicilio'],"colAutos"=>$coleccion]);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setMensaje("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }


    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function setNroDni($nroDni)
    {
        $this->nroDni = $nroDni;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }
    public function getColAutos()
    {
        return $this->colAutos;
    }
    public function setColAutos($colAutos)
    {
        $this->colAutos = $colAutos;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }
}

?>