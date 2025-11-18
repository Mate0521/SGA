<?php
class AlumnoDAO extends PersonaDAO
{
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);
        }

        public function obtenerCursosYHorarios($idAlumno)
        {
                // Aquí iría la lógica para obtener los cursos y horarios del alumno
                // incluyendo el nombre del profesor y de la asignatura.

                return "";

        }
}
?>