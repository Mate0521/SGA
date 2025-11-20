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
    $conexion = new Conexion();
    $conexion->abrir();

    $alumnoDAO = new AlumnoDAO();
    $conexion->ejecutar($alumnoDAO->obtenerCursosYHorarios($this->getCorreo()));

    $lista = [];

    while (($datos = $conexion->registro()) != null) {

        $lista[] = [
            "id_curso"          => $datos[2],
            "asignatura"        => $datos[3],
            "profesor"          => $datos[4],
            "horario" => [
                "lunes"     => $datos[5],
                "martes"    => $datos[6],
                "miercoles" => $datos[7],
                "jueves"    => $datos[8],
                "viernes"   => $datos[9],
                "sabados"   => $datos[10],
                "domingo"   => $datos[11]
            ]
        ];

        // guardamos nombre y correo una sola vez
        $nombreAlumno = $datos[0];
        $correoAlumno = $datos[1];
    }

    $conexion->cerrar();

    return [
        "nombre" => $nombreAlumno,
        "correo" => $correoAlumno,
        "cursos" => $lista
    ];
}


}
?>