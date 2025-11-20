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

    // Procesar filas
    while ($datos = $conexion->registro()) {

        // Solo tomar nombre y correo una vez
        if ($nombreAlumno === null) {
            $nombreAlumno = $datos["nombre_alumno"];
            $correoAlumno = $datos["correo"];
        }

        $listaCursos[] = [
            "id_curso"   => $datos["id_curso"],
            "asignatura" => $datos["asignatura"],
            "profesor"   => $datos["profesor"],
            "horario" => [
                "lunes"     => $datos["lunes"],
                "martes"    => $datos["martes"],
                "miercoles" => $datos["miercoles"],
                "jueves"    => $datos["jueves"],
                "viernes"   => $datos["viernes"],
                "sabado"    => $datos["sabado"],
                "domingo"   => $datos["domingo"]
            ]
        ];
    }

    $conexion->cerrar();

    // Si no hay datos, retornar false
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
?>