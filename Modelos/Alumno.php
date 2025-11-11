<?php
class Alumno extends Persona
{


        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $curso = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);

        }
}
?>