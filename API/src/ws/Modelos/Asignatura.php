<?php
    class Asignatura{
        private $id_Asignatura;
        private $carrera;
        private $nombre_Asignatura;
        private $id_Duracion;
        private $creditos_Teorticos;
        private $creditos_Laboratoriales;

        public function __construct($id_Asignatura = "", $carrera = "", $nombre_Asignatura = "", $id_Duracion = "", $creditos_Teorticos = "", $creditos_Laboratoriales = ""){
            $this->id_Asignatura = $id_Asignatura;
            $this->carrera = $carrera;
            $this->nombre_Asignatura = $nombre_Asignatura;
            $this->id_Duracion = $id_Duracion;
            $this->creditos_Teorticos = $creditos_Teorticos;
            $this->creditos_Laboratoriales = $creditos_Laboratoriales;

        }

        /**
         * Get the value of id_Asignatura
         */ 
        public function getId_Asignatura()
        {
                return $this->id_Asignatura;
        }

        /**
         * Set the value of id_Asignatura
         *
         * @return  self
         */ 
        public function setId_Asignatura($id_Asignatura)
        {
                $this->id_Asignatura = $id_Asignatura;

                return $this;
        }

        /**
         * Get the value of carrera
         */ 
        public function getCarrera()
        {
                return $this->carrera;
        }

        /**
         * Set the value of carrera
         *
         * @return  self
         */ 
        public function setCarrera($carrera)
        {
                $this->carrera = $carrera;

                return $this;
        }

        /**
         * Get the value of nombre_Asignatura
         */ 
        public function getNombre_Asignatura()
        {
                return $this->nombre_Asignatura;
        }

        /**
         * Set the value of nombre_Asignatura
         *
         * @return  self
         */ 
        public function setNombre_Asignatura($nombre_Asignatura)
        {
                $this->nombre_Asignatura = $nombre_Asignatura;

                return $this;
        }

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
         * Get the value of creditos_Teorticos
         */ 
        public function getCreditos_Teorticos()
        {
                return $this->creditos_Teorticos;
        }

        /**
         * Set the value of creditos_Teorticos
         *
         * @return  self
         */ 
        public function setCreditos_Teorticos($creditos_Teorticos)
        {
                $this->creditos_Teorticos = $creditos_Teorticos;

                return $this;
        }

        /**
         * Get the value of creditos_Laboratoriales
         */ 
        public function getCreditos_Laboratoriales()
        {
                return $this->creditos_Laboratoriales;
        }

        /**
         * Set the value of creditos_Laboratoriales
         *
         * @return  self
         */ 
        public function setCreditos_Laboratoriales($creditos_Laboratoriales)
        {
                $this->creditos_Laboratoriales = $creditos_Laboratoriales;

                return $this;
        }
    }
?>