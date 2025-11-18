<?php
class AlumnoDAO extends PersonaDAO
{
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $curso = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);

        }
}
?>