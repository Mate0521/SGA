<?php
class ProfesorDAO extends PersonaDAO
{

    public function __construct($nombre = "", $id = "", $correo = "", $clave = "", $foto = "", $legajo = "", $materia = "")
    {
        parent::__construct($nombre, $id, $correo, $clave, $foto);
    }

    /*
        1. una clase exclusiva para conslta del listado de profesores (no le voy ha enviar nada ).

        datos que me debe de dar (con el mismo nombre ):
        nombre: nombre del profesor 
        correo: correo del prof
        telefono: telefono del pof
        area: nombre del area del profesor
        departamento: nombre del departamento del area 
        cursos:{}->un listado con el nombre de los cursos que da sigue estando en formato json
        */

    public function ListaProfesores()
    {
        return "SELECT 
                p.Nombre_Profesor, 
                p.Correo, 
                a.Nombre_Area, 
                d.Nombre_Departamento
                FROM Profesor p
                INNER JOIN Area_Con a 
                    ON p.Id_AreaCon = a.Id_Area
                INNER JOIN Departamento d 
                    ON a.Id_Departamento = d.Id_Departamento
                WHERE p.Id_Profesor = ".$this->getId().";
                ";
    }

    public function ListaMaterias()
    {
        return "
        SELECT
            a.Nombre_Asignatura,
            p.Nombre_Profesor
            FROM
            Profesor p 
            INNER JOIN 
            Asignatura_Profesor ap on p.Id_Profesor = ap.Id_Profesor
            INNER JOIN
            Asignatura a on ap.Id_Asignatura = a.Id_Asignatura
            WHERE p.Id_Profesor = ".$this->getId();
    }
}
