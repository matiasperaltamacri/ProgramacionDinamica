<?php
class AbmPersona{
  /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    public function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['dni']) ){;
            $obj = new Persona();
            $nroDni="'".$param['dni']."'"; // Agrega comillas al String para adecuarlo a la consulta sql
            $datos=["dni"=>$nroDni,"nombre"=>null,"apellido"=>null,"fechaNac"=>null,"telefono"=>null,"domicilio"=>null,"colAutos"=>null];
            $obj->setear($datos);
        }
        //print_r($obj);
        return $obj;
    }
    /*
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * Se espera un retorno del objeto que responda a la clave en la Base de Datos.
    * $verCol boolean. Si es true busca también la colAutos de la Persona en la BD.
    */
    public function buscarObjeto($param,$verCol){
        $obj=$this->cargarObjetoConClave($param);
            if ($obj<>null){
                $resp=$obj->cargar($verCol);
                //print_r($obj);
                if (!$resp){    //Si no se encontro el dni en la BD retorna nulo.
                    $obj=null;
                }
            }
        return $obj;
    }  
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('dni',$param) and array_key_exists('nombre',$param) and array_key_exists('apellido',$param) and array_key_exists('fechaNac',$param) and array_key_exists('telefono',$param) and array_key_exists('domicilio',$param)){
            $obj = new Persona();
            $obj->setear(['dni'=>$param['dni'],"nombre"=>$param['nombre'],"apellido"=>$param["apellido"],"fechaNac"=>$param["fechaNac"],"telefono"=>$param["telefono"],"domicilio"=>$param["domicilio"],"colAutos"=>null]);
        }
        //print_r($obj);
        return $obj;
    }
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['dni']))
            $resp = true;
        return $resp;
    }
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['dni'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
            
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
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
            $elObjtPersona = $this->cargarObjeto($param);
            if($elObjtPersona!=null and $elObjtPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
}
?>