<?php
    class Municipio {
        /**
         * Atributos de clase
         */
        private $nombre;
        private $contagiados;
        private $fallecidos;
        private $recuperados;
        private $poblacion;
        private $establecimientos;
        private $restricciones;
        /**
         * Constructor de la clase municipio
         */
        public function __construct($nombre,$contagiados,$fallecidos,$recuperados,$poblacion,$establecimientos,$restricciones){  
            $this->nombre = $nombre;
            $this->$contagiados=$contagiados;
            $this->$fallecidos=$fallecidos;
            $this->$recuperados=$recuperados;
            $this->$poblacion =$poblacion;
            $this->$establecimientos=$establecimientos;
            $this->$restricciones=$restricciones;
        }
        /**
         * getters: Estos metodos nos ayudaran a obtener los valores de los atributos que indiquemos
         */
        public function getNombre(){
            return $this->$nombre;
        }

        public function getContagiados(){
            return $this->$contagiados;
        }
        public function getFallecidos(){
            return $this->$fallecidos;
        }
        public function getRecuperados(){
            return $this->$recuperados;
        }
        public function getPoblacion(){
            return $this->$poblacion;
        }
        public function getEstablecimientos(){
            return $this->$establecimientos;
        }
        public function getRestricciones(){
            return $this->$restricciones;
        }
        /**
         * setters: Estos metodo nos ayudara a poder asignarle valor a los atributos de la clase
         */
        public function setNombre($nombre){
            $this->$nombre=$nombre;
        }
        public function setContagiados($contagiados){
            $this->$contagiados=$contagiados;
        }
        public function setFallecidos($fallecidos){
            $this->$fallecidos=$fallecidos;
        }
        public function setRecuperados($recuperados){
            $this->$recuperados=$recuperados;
        }
        public function setPoblacion($poblacion){
            $this->$poblacion=$poblacion;
        }
        public function setEstablecimientos($establecimientos){
            $this->$establecimientos=$establecimientos;
        }
        public function setRestricciones($restricciones){
            $this->$restricciones=$restricciones;
        }
    }

   // $guatemala = new Municipio("Guatemala");
    //$guatemala->showInfo();
?>