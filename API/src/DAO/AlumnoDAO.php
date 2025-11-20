<?php
require_once('PersonaDAO.php');
class AlumnoDAO extends PersonaDAO
{
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);
        }

        public function obtenerCursosYHorarios($correo)
        {
                return "SELECT 
    a.Nombre_Alumno AS nombre_alumno,
    a.Correo AS correo,
    c.id_curso,
    asi.Nombre_Asignatura AS asignatura,
    p.Nombre_Profesor AS profesor,
    c.lunes,
    c.martes,
    c.miercoles,
    c.jueves,
    c.viernes,
    c.sabado,
    c.domingo
FROM alumno a
INNER JOIN alumno_horario ah ON a.Id_Alumno = ah.Id_Alumno
INNER JOIN curso c ON ah.id_curso = c.id_curso
INNER JOIN curso_profesor cp ON c.id_curso = cp.id_curso
INNER JOIN profesor p ON cp.Id_Profesor = p.Id_Profesor
INNER JOIN asignatura asi ON c.id_asignatura = asi.Id_Asignatura
WHERE a.Correo = '$correo';
";
        }
}
