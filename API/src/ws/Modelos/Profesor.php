<?php
    require_once '../Conexion/Conexion.php';
    require_once '../Conexion/ProfesorDAO.php';
    require_once '../Modelos/Persona.php';
    require_once '../Modelos/AreaCon.php';  
    class Profesor extends Persona {
        private $idArea;
        private $Tel;
        private $profesores = array();

        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $idArea = "", $Tel = ""  ){
            parent::__construct($nombre, $id, $correo, $clave, $foto);
            $this->idArea = $idArea;
            $this->Tel = $Tel;
        }

        public function listadoProfesores(){
            $conexion = new Conexion();
            $profesorDAO = new ProfesorDAO();
            
            $conexion->abrir();
            $conexion->ejecutar($profesorDAO->ListaProfesores());
            
            while(($datos = $conexion->registro())!=null){
                $areaCon = new AreaCon("",$datos[3],$datos[2]);
                $profe = new Profesor(
                    $datos[0],
                    $this->getId(),
                    $datos[1],
                    "",
                    "",
                    $areaCon,
                    ""                    
                );
                array_push($profesores,$profe);
            }

            while(($datos = $conexion->registro())!=null){
                $areaCon = new AreaCon("",$datos[3],$datos[2]);
                $profe = new Profesor(
                    $datos[0],
                    $this->getId(),
                    $datos[1],
                    "",
                    "",
                    $areaCon,
                    ""                    
                );
                array_push($profesores,$profe);
            }

            $conexion->cerrar();
        }

        /**
         * Get the value of idArea
         */ 
        public function getIdArea()
        {
                return $this->idArea;
        }

        /**
         * Set the value of idArea
         *
         * @return  self
         */ 
        public function setIdArea($idArea)
        {
                $this->idArea = $idArea;

                return $this;
        }

        /**
         * Get the value of Tel
         */ 
        public function getTel()
        {
                return $this->Tel;
        }

        /**
         * Set the value of Tel
         *
         * @return  self
         */ 
        public function setTel($Tel)
        {
                $this->Tel = $Tel;

                return $this;
        }
    }
?>