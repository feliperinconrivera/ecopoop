<?php
    class usuarios{
        private $nombre;
        private $apellido;
        private $email;
        private $telefono;
        private $documento;


        public function __construct(){}


        public function setnombre($nombre){
            $this->nombre=$nombre;
        }

        public function setapellido($apellido){
            $this->apellido=$apellido;
        }

        public function setemail($email){
            return $this->email= $email;
        }
        public function settelefono($telefono){
            $this->telefono=$telefono;
        }

        public function setdocumento($documento){
            $this->documento=$documento;
        }

        



        public function getnombre(){
            return $this->nombre;
        }

        public function getapellido(){
            return $this->apellido;
        }

        public function getemail(){
            return $this->email;
        }

        public function gettelefono(){
            return $this->telefono;
        }
        public function getdocumento(){
            return $this->documento;
        }

    }

    