<?php
    class Profesor extends Persona {

        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $materia = ""){
            parent::__construct($nombre, $id, $correo, $clave, $foto);
        }
    }
?>