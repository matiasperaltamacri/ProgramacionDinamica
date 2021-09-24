<?php
class AbmAuto{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    public function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['patente']) ){;
            $obj = new Auto();
            $patente="'".$param['patente']."'"; // Agrega comillas al String para adecuarlo a la consulta sql
            $datos=["patente"=>$patente,"marca"=>null,"modelo"=>null,"persona"=>null];
            $obj->setear($datos);
        }
        //print_r($obj);
        return $obj;
    }
    /*
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * Se espera un retorno del objeto que responda a la clave en la Base de Datos.
    */
    public function buscarObjeto($param,$flag){
        $obj=$this->cargarObjetoConClave($param);
            if ($obj<>null){
                $resp=$obj->cargar($flag);
                if (!$resp){    //Si no se encontro la patente en la BD retorna nulo.
                    $obj=null;
                }
            }
        return $obj;
    }

    public function buscar($flag,$param){
        $where = " true ";
        //print_r($param);
        if ($param<>null){
            if  (isset($param['patente']))
                $where.=" and Patente ='".$param['patente']."'";
            if  (isset($param['marca']))
                 $where.=" and Marca ='".$param['marca']."'";
            if  (isset($param['modelo']))
                $where.=" and Modelo = ".$param['modelo'];
            if  (isset($param['dni']))
                 $where.=" and DniDuenio = ".$param['dni'];
        }
        //echo $where."\n";
        $arreglo = Auto::listar($flag,$where);  
        return $arreglo;
    }
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('patente',$param) and array_key_exists('marca',$param) and array_key_exists('modelo',$param)){
            if (array_key_exists('dni',$param)){
                $abmPers=new AbmPersona();
                $objP=$abmPers->buscarObjeto($param,false);
            }else{
                $objP=null;
            }
            $obj = new Auto();

            $obj->setear(['patente'=>$param['patente'],"marca"=>$param['marca'],"modelo"=>$param["modelo"],"persona"=>$objP]);
        }
        //print_r($obj);
        return $obj;
    }
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['patente'] =null;
        $elObjtAuto = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtAuto!=null and $elObjtAuto->insertar()){
            $resp = true;
            
        }
        return $resp;
        
    }
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAuto = $this->buscarObjeto($param,true);
            if (isset($param['marca'])){
                $elObjtAuto->setMarca($param['marca']);
            }
            if (isset($param['modelo'])){
                $elObjtAuto->setModelo($param['modelo']);
            }
            if (isset($param['dni'])){
                $objP=$elObjtAuto->getObjPersona();
                $objP->setNroDni($param['dni']);
                $elObjtAuto->setObjPersona($objP);
            }
            if($elObjtAuto!=null and $elObjtAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
}
?>