<?php

    /*
        1. una clase exclusiva para conslta del listado de profesores (no le voy ha enviar nada ).

        datos que me debe de dar (con el mismo nombre ):
        nombre: nombre del profesor 
        correo: correo del prof
        telefono: telefono del pof
        area: nombre del area del profesor
        departamento: nombre del departamento del area 
        cursos:{}->un listado con el nombre de los cursos que da sigue estando en formato json
        */

    require_once '../Conexion/Conexion.php';
    require_once '../Conexion/ProfesorDAO.php';
    require_once '../Modelos/Persona.php';
    require_once '../Modelos/AreaCon.php';  
    class Profesor extends Persona {

        private $id_AreaCon;
        private $telefono;

        public function __construct($nombre_Profesor="", $id="", $correo="", $clave="", $foto="", $id_AreaCon = "", $telefono = "")
        {
            parent::__construct(
                $nombre_Profesor,
                $id,
                $correo,
                $clave,
                $foto
            );
            $this->id_AreaCon = $id_AreaCon;
            $this->telefono = $telefono;
        }

        

        /**
         * Get the value of id_AreaCon
         */ 
        public function getId_AreaCon()
        {
                return $this->id_AreaCon;
        }

        /**
         * Set the value of id_AreaCon
         *
         * @return  self
         */ 
        public function setId_AreaCon($id_AreaCon)
        {
                $this->id_AreaCon = $id_AreaCon;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        public function listarProfesores(){
            $conexion = new Conexion();
            $profesorDAO = new ProfesorDAO();
            $conexion->abrir();
            $conexion->ejecutar($profesorDAO->listarProfesores());
            $lista = [];
            while(($fila = $conexion->registro()) != null){
                $lista[] = [
                "nombre"      => $fila[0],
                "correo"      => $fila[1],
                "telefono"    => $fila[2],
                "area"        => $fila[3],
                "departamento"=> $fila[4],
                "cursos"      => json_decode($fila[5])
                ];
            }
            return json_encode($lista);
        }
    }
?>