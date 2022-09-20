<?php
    class Planillas{
        private $fecha;
        private $tipo_residuo;
        private $infec;
        private $numero_bolsas;
        private $peso_kg;
        private $conductor;
        private $entrego;
        private $total_kg;


        public function __construct(){}


        public function setfecha($fecha){
            $this->fecha=$fecha;
        }

        public function settipo_residuo($tipo_residuo){
            $this->tipo_residuo=$tipo_residuo;
        }

        public function setinfec($infec){
            return $this->infec= $infec;
        }

        public function setnumero_bolsas($numero_bolsas){
            $this->numero_bolsas=$numero_bolsas;
        }

        public function setpeso_kg($peso_kg){
            $this->peso_kg=$peso_kg;
        }

        public function setconductor($conductor){
            $this->conductor=$conductor;
        }

        public function setentrego($entrego){
            $this->entrego=$entrego;
        }

        public function settotal_kg($total_kg){
            $this->total_kg=$total_kg;
        }


        

        public function getfecha(){
            return $this->fecha;
        }

        public function gettipo_residuo(){
            return $this->tipo_residuo;
        }

        public function getinfec(){
            return $this->infec;
        }

        public function getnumero_bolsas(){
            return $this->numero_bolsas;
        }
        public function getpeso_kg(){
            return $this->peso_kg;
        }
        public function getconductor(){
            return $this->conductor;
        }
        public function getentrego(){
            return $this->entrego;
        }

        public function gettotal_kg(){
            return $this->total_kg;
        }
    }
