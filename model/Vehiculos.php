<?php
    class Vehiculos{
        private $placa;
        private $tipo_carro;
        private $descripcion;
        private $capacidad_contenedor;

        public function __construct(){}

        public function setplaca($placa){
            $this->placa=$placa;
        }

        public function settipo_carro($tipo_carro){
            $this->tipo_carro=$tipo_carro;
        }

        public function setdescripcion($descripcion){
            return $this->descripcion=$descripcion;
        }
        public function setcapacidad_contenedor($capacidad_contenedor){
            $this->capacidad_contenedor=$capacidad_contenedor;
        }


        

        public function getplaca(){
            return $this->placa;
        }

        public function gettipo_carro(){
            return $this->tipo_carro;
        }

        public function getdescripcion(){
            return $this->descripcion;
        }

        public function getcapacidad_contenedor(){
            return $this->capacidad_contenedor;
        }


    }


?>