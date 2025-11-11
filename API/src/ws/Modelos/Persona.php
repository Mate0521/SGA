<?php
    class Persona{
        protected $nombre;
        protected $id;
        protected $correo;
        protected $clave;
        protected $foto;
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = ""){
            $this->nombre = $nombre;
            $this->id = $id;
            $this->correo = $correo;
            $this->clave = $clave;
            $this->foto = $foto;
        }

        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of clave
         */ 
        public function getClave()
        {
                return $this->clave;
        }

        /**
         * Set the value of clave
         *
         * @return  self
         */ 
        public function setClave($clave)
        {
                $this->clave = $clave;

                return $this;
        }

        /**
         * Get the value of foto
         */ 
        public function getFoto()
        {
                return $this->foto;
        }

        /**
         * Set the value of foto
         *
         * @return  self
         */ 
        public function setFoto($foto)
        {
                $this->foto = $foto;

                return $this;
        }
    }
?>