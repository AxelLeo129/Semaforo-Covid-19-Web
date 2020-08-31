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
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEstado(){
        return $this->estado;
    }
    /**
     * setters: estos metodos nos serviran para poder asignarle valor a los atributos
     */
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
}
?>