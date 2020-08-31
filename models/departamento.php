<?php
class Departamento{
    /**
     * Atributos de la clase
     */
    private $nombre;
    private $municipios;
    private $color;
    private $porcentaje_contagios;
    /**
     * Constructor de la clase Departamento
     */

    public function __constructor($nombre,$municipios,$color,$porcentaje_contagios){
        $this->nombre=$nombre;
        $this->municipios=$municipios;
        $this->color=$color;
        $this->porcentaje_contagios=$porcentaje_contagios;
    }
    /**
     * getters: Estos metodos me ayudaran a poder obtener los valores del los atributos
     */
    public function getNombre(){
        return $this->nombre;
    }
    public function getListadoMunicipios(){
        return $this->municipios;
        //o
        /**
         * $lista=[];
         * foreach($municipios as $municipio){
         * array_push($lista,$municipio->getNombre());
         * }
         * return &lista;
         */
    }
    public function getPoblacion(){
        $poblacion=0;
        foreach($this->municipios as $municipio){
            $poblacion+=$municipio->getPoblacion();
        }
        return $poblacion;
    }
    public function getContagiados(){
        $contagios=0;
        foreach($this->municipios as $municipio){
            $contagios+=$municipio->getContagiados();
        }
        return $contagios;
    }
    public function getListadoEstablecimientos(){
        $lista_establecimientos=[];
        foreach($this->municipios as $municipio){
            foreach($municipio->getEstablecimientos() as $establecimiento){
                array_push($lista_establecimientos,$establecimiento);
            }
        }
        return $lista_establecimientos;
    }
}
?>