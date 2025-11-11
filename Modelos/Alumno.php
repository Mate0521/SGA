<?php
    class Alumno extends Persona {
        private $legajo;
        private $curso;

        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $curso = ""){
            parent::__construct($nombre, $id, $correo, $clave, $foto);
            $this->legajo = $legajo;
            $this->curso = $curso;
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
         * Get the value of curso
         */ 
        public function getCurso()
        {
                return $this->curso;
        }

        /**
         * Set the value of curso
         *
         * @return  self
         */ 
        public function setCurso($curso)
        {
                $this->curso = $curso;

                return $this;
        }
    }
?>