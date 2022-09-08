<?php
    class Mantenimientos{
        private $mantenimientos_anuales;
        private $costo_mantenimiento;
        private $observaciones;
        private $fecha_mantenimiento;

        public function __construct(){}

        public function setmantenimientos_anuales($mantenimientos_anuales){
            $this->mantenimientos_anuales=$mantenimientos_anuales;
        }

        public function setcosto_mantenimiento($costo_mantenimiento){
            $this->costo_mantenimiento=$costo_mantenimiento;
        }

        public function setobservaciones($observaciones){
            return $this->observaciones=$observaciones;
        }
        public function setfecha_mantenimiento($fecha_mantenimiento){
            $this->fecha_mantenimiento=$fecha_mantenimiento;
        }


        
        public function getmantenimientos_anuales(){
            return $this->mantenimientos_anuales;
        }

        public function getcosto_mantenimiento(){
            return $this->costo_mantenimiento;
        }

        public function getobservaciones(){
            return $this->observaciones;
        }

        public function getfecha_mantenimiento(){
            return $this->fecha_mantenimiento;
        }


    }


?>