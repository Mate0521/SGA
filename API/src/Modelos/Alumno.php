<?php

require_once('Persona.php');
require_once('../DAO/AlumnoDAO.php');
require_once('../DAO/Conexion.php');

class Alumno extends Persona
{
        /*
        3. archivo donde le envio el id del estudiante y me responde con:

        nombre del alumno
        correo
        cursos en los que esta con su respesctivo horario, indicando tambien el profesor,
        con el respevtivo nombre de la asignatura
        */
        public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "")
        {
                parent::__construct($nombre, $id, $correo, $clave, $foto);
        }

        public function obtenerCursosYHorarios()
        {
                // Aquí iría la lógica para obtener los cursos y horarios del alumno
                // incluyendo el nombre del profesor y de la asignatura.
                $conexion = new Conexion();
                $conexion->abrir();
                $alumnoDAO = new AlumnoDAO();
                $alumnoDAO->obtenerCursosYHorarios($this->getCorreo());
                $lista = [];
                while(($datos = $conexion->registro()) != null)
                {
                        $lista[] = [
                                "nombre_alumno" => $datos[0],
                                "correo" => $datos[1],
                                "nombre_asignatura" => $datos[2],
                                "nombre_profesor" => $datos[3]
                        ];
                }
                $conexion->cerrar();
                return $lista;

        }

}
?>