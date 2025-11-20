<?php

require_once('Persona.php');
require_once('../DAO/AlumnoDAO.php');
require_once('../Conexion/Conexion.php');

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
        $conexion = new Conexion();
        $conexion->abrir();

        $alumnoDAO = new AlumnoDAO();
        $consulta = $alumnoDAO->obtenerCursosYHorarios($this->getCorreo());
        $conexion->ejecutar($consulta);

        $listaCursos = [];
        $nombreAlumno = null;
        $correoAlumno = null;

        while ($datos = $conexion->registro()) {

            // Tomar nombre y correo solo una vez
            if ($nombreAlumno === null) {
                $nombreAlumno = $datos[0];
                $correoAlumno = $datos[1];
            }

            $listaCursos[] = [
                "id_curso"   => $datos[2],
                "asignatura" => $datos[3],
                "profesor"   => $datos[4],
                "horario" => [
                    "lunes"     => $datos[5],
                    "martes"    => $datos[6],
                    "miercoles" => $datos[7],
                    "jueves"    => $datos[8],
                    "viernes"   => $datos[9],
                    "sabado"    => $datos[10],
                    "domingo"   => $datos[11]
                ]
            ];
        }

        $conexion->cerrar();

        // Si no existe alumno
        if ($nombreAlumno === null) {
            return false;
        }

        return [
            "nombre" => $nombreAlumno,
            "correo" => $correoAlumno,
            "cursos" => $listaCursos
        ];
    }
}
