<?php
class AlumnoDAO extends PersonaDAO
{
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);
        }

        public function obtenerCursosYHorarios($correo)
        {
                // Aquí iría la lógica para obtener los cursos y horarios del alumno
                // incluyendo el nombre del profesor y de la asignatura.

                return "SELECT 
            a.Nombre_Alumno,
            a.Correo,
            c.id_curso,
            asi.Nombre_Asignatura,
            p.Nombre_Profesor,
            ah.lunes,
            ah.martes,
            ah.miercoles,
            ah.jueves,
            ah.viernes,
            ah.sabados,
            ah.domingo
        FROM alumno a
        INNER JOIN alumno_horario ah ON a.Id_Alumno = ah.Id_Alumno
        INNER JOIN curso c ON ah.id_curso = c.id_curso
        INNER JOIN curso_profesor cp ON c.id_curso = cp.id_curso
        INNER JOIN profesor p ON cp.Id_Profesor = p.Id_Profesor
        INNER JOIN asignatura asi ON c.id_asignatura = asi.Id_Asignatura
        WHERE a.Correo = '$correo';";
        }
}
