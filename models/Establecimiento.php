<?php
class Establecimiento{
    /**
     * Atributos de la clase
     */
    private $nombre;
    private $direccion;
    private $estado;
    /**
     * constructor de la clase
     */
    public function __constructor($nombre,$direccion,$estado){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->estado=$estado;
    }
    /**
     * getters: Estos metodos nos ayudaran a obtener los valores de las variables de clase
     */
    
    /** Metodo para obtener el nombre del establecimiento elegido 
    */
    public function getNombre(){
        return $this->nombre;
    }
    
    /** Metodo para obtener la direccion del establecimiento 
    */   
    public function getDireccion(){
        return $this->direccion;
    }
    
    /** Metodo para obtener el estado en el que se encuentra el establecimiento
    */
    public function getEstado(){
        return $this->estado;
    }
    /**
     * setters: estos metodos nos serviran para poder asignarle valor a los atributos
     */
    
    /** Metodo para establece el nombre del establecimiento 
    */
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    /** Metodo para establecer la direccion del establecimiento 
    */
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    
    /** Metodo para establecer el estado en el que se encuentra el establecimiento 
    */
    public function setEstado($estado){
        $this->estado=$estado;
    }
}
?>
