<?php
    class DepartamentoDAO{
        private $id_Departamento;
        private $Nombre_Departamento;

        public function __construct($id_Departamento = "", $Nombre_Departamento = ""){
            $this->id_Departamento = $id_Departamento;
            $this->Nombre_Departamento = $Nombre_Departamento;
        }   

        /**
         * Get the value of id_Departamento
         */ 
        public function getId_Departamento()
        {
                return $this->id_Departamento;  
        }
        /**
         * Set the value of id_Departamento
         *
         * @return  self
         */ 
        public function setId_Departamento($id_Departamento)
        {
                $this->id_Departamento = $id_Departamento;

                return $this;
        }
        
        /**
         * Get the value of Nombre_Departamento
         */ 
        public function getNombre_Departamento()
        {
                return $this->Nombre_Departamento;
        }

        /**
         * Set the value of Nombre_Departamento
         *
         * @return  self
         */ 
        public function setNombre_Departamento($Nombre_Departamento)
        {
                $this->Nombre_Departamento = $Nombre_Departamento;

                return $this;
        }
    }
?>