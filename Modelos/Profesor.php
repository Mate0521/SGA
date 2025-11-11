<?php
    class Profesor extends Persona {
        private $legajo;
        private $materia;

        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $materia = ""){
            parent::__construct($nombre, $id, $correo, $clave, $foto);
            $this->legajo = $legajo;
            $this->materia = $materia;
        }

        /**
         * Get the value of legajo
         */ 
        public function getLegajo()
        {
                return $this->legajo;
        }

        /**
         * Set the value of legajo
         *
         * @return  self
         */ 
        public function setLegajo($legajo)
        {
                $this->legajo = $legajo;

                return $this;
        }

        /**
         * Get the value of materia
         */ 
        public function getMateria()
        {
                return $this->materia;
        }

        /**
         * Set the value of materia
         *
         * @return  self
         */ 
        public function setMateria($materia)
        {
                $this->materia = $materia;

                return $this;
        }
    }
?>