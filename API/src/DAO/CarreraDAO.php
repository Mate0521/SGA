<?php
    class CarreraDAO{
        
        private $nombre_Carrera;
        private $id_Carrera;

        public function __construct($nombre_Carrera = "", $id_Carrera = ""){
            $this->nombre_Carrera = $nombre_Carrera;
            $this->id_Carrera = $id_Carrera;
        }
        /**
         * Get the value of nombre_Carrera
         */ 
        public function getNombre_Carrera()
        {
                return $this->nombre_Carrera;
        }

        /**
         * Set the value of nombre_Carrera
         *
         * @return  self
         */ 
        public function setNombre_Carrera($nombre_Carrera)
        {
                $this->nombre_Carrera = $nombre_Carrera;

                return $this;
        }
        /**
         * Get the value of id_Carrera
         */ 
        public function getId_Carrera()
        {
                return $this->id_Carrera;
        }

        /**
         * Set the value of id_Carrera
         *
         * @return  self
         */ 
        public function setId_Carrera($id_Carrera)
        {
            $this->id_Carrera = $id_Carrera;
            return $this;
        }
    }
?>