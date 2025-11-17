<?php 
    class AreaCon
    {
        private $area;
        private $departamento;
        private $nombreArea;

        public function __construct($area = "", $departamento = "", $nombreArea = "")
        {
            $this->area = $area;
            $this->departamento = $departamento;
            $this->nombreArea = $nombreArea;
        }

        

        /**
         * Get the value of area
         */ 
        public function getArea()
        {
                return $this->area;
        }

        /**
         * Set the value of area
         *
         * @return  self
         */ 
        public function setArea($area)
        {
                $this->area = $area;

                return $this;
        }

        /**
         * Get the value of departamento
         */ 
        public function getDepartamento()
        {
                return $this->departamento;
        }

        /**
         * Set the value of departamento
         *
         * @return  self
         */ 
        public function setDepartamento($departamento)
        {
                $this->departamento = $departamento;

                return $this;
        }

        /**
         * Get the value of nombreArea
         */ 
        public function getNombreArea()
        {
                return $this->nombreArea;
        }

        /**
         * Set the value of nombreArea
         *
         * @return  self
         */ 
        public function setNombreArea($nombreArea)
        {
                $this->nombreArea = $nombreArea;

                return $this;
        }
    }
?>