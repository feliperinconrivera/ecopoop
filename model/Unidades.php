<?php
    class Unidades{
        private $nombre;
        private $direccion;
        private $descripcion;
        private $n°_apartamentos;
        private $n°_contenedores;
        private $nombre_administrador;
        private $rut;
        private $documento;


        public function __construct(){}


        public function setnombre($nombre){
            $this->nombre=$nombre;
        }

        public function setdireccion($direccion){
            $this->direccion=$direccion;
        }
        
        public function setdescripcion($descripcion){
            $this->descripcion=$descripcion;
        }

        public function setn°_apartamentos($n°_apartamentos){
            return $this->n°_apartamentos= $n°_apartamentos;
        }
        public function setn°_contenedores($n°_contenedores){
            $this->n°_contenedores=$n°_contenedores;
        }

        public function setnombre_administrador($nombre_administrador){
            $this->nombre_administrador=$nombre_administrador;
        }

        public function setrut($rut){
            $this->rut=$rut;
        }

        public function setdocumento($documento){
            $this->documento=$documento;
        }

        







        public function getnombre(){
            return $this->nombre;
        }

        public function getdireccion(){
            return $this->direccion;
        }

        public function getdescripcion(){
            return $this->descripcion;
        }

        public function getn°_apartamentos(){
            return $this->n°_apartamentos;
        }

        public function getn°_contenedores(){
            return $this->n°_contenedores;
        }

        public function getnombre_administrador(){
            return $this->nombre_administrador;
        }

        public function getrut(){
            return $this->rut;
        }

        public function getdocumento(){
            return $this->documento;
        }
        
    }

    ?>






    <?php

    class Administradores{
        private $nombre;
        private $apellido;
        private $rut;
        private $documento;


        public function __construct(){}


        public function setnombre($nombre){
            $this->nombre=$nombre;
        }

        public function setapellido($apellido){
            $this->apellido=$apellido;
        }
        
        public function setrut($rut){
            $this->rut=$rut;
        }

        public function setdocumento($documento){
            return $this->documento= $documento;
        }

        

        public function getnombre(){
            return $this->nombre;
        }

        public function getapellido(){
            return $this->apellido;
        }

        public function getrut(){
            return $this->rut;
        }

        public function getdocumento(){
            return $this->documento;
        }
        
    }

    

    