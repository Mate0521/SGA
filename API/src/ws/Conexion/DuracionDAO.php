<?php
    class DuracionDAO{
        private $id_Duracion;
        private $nombre_Duracion;

        public function __construct($id_Duracion = "", $nombre_Duracion = ""){
            $this->id_Duracion = $id_Duracion;
            $this->nombre_Duracion = $nombre_Duracion;
        }
        /**
         * Get the value of id_Duracion
         */

        /**
         * Get the value of id_Duracion
         */ 
        public function getId_Duracion()
        {
                return $this->id_Duracion;
        }

        /**
         * Set the value of id_Duracion
         *
         * @return  self
         */ 
        public function setId_Duracion($id_Duracion)
        {
                $this->id_Duracion = $id_Duracion;

                return $this;
        }

        /**
         * Get the value of nombre_Duracion
         */ 
        public function getNombre_Duracion()
        {
                return $this->nombre_Duracion;
        }

        /**
         * Set the value of nombre_Duracion
         *
         * @return  self
         */ 
        public function setNombre_Duracion($nombre_Duracion)
        {
                $this->nombre_Duracion = $nombre_Duracion;

                return $this;
        }
    }
?>