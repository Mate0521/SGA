<?php
    class ProfesorDAO extends PersonaDAO {

        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $materia = ""){
            parent::__construct($nombre, $id, $correo, $clave, $foto);
        }
    }
?>