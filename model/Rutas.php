<?php
    class Rutas{
        private $ruta;
        private $km_ruta;
        private $trayectoria;
        private $dias;
        private $detalle;
        private $zona;
        private $km_estimado;


        public function __construct(){}


        public function setruta($ruta){
            $this->ruta=$ruta;
        }

        public function setkm_ruta($km_ruta){
            $this->km_ruta=$km_ruta;
        }

        public function settrayectoria($trayectoria){
            return $this->trayectoria= $trayectoria;
        }

        public function setdias($dias){
            $this->dias=$dias;
        }

        public function setdetalle($detalle){
            $this->detalle=$detalle;
        }

        public function setzona($zona){
            $this->zona=$zona;
        }

        public function setkm_estimado($km_estimado){
            $this->km_estimado=$km_estimado;
        }


        


        public function getruta(){
            return $this->ruta;
        }

        public function getkm_ruta(){
            return $this->km_ruta;
        }

        public function gettrayectoria(){
            return $this->trayectoria;
        }

        public function getdias(){
            return $this->dias;
        }
        public function getdetalle(){
            return $this->detalle;
        }
        public function getzona(){
            return $this->zona;
        }
        public function getkm_estimado(){
            return $this->km_estimado;
        }

    }
