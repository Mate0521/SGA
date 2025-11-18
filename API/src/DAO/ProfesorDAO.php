<?php
class ProfesorDAO extends PersonaDAO
{

    private $id_AreaCon;
    private $telefono;

    public function __construct($nombre_Profesor="", $id="", $correo="", $clave="", $foto="", $id_AreaCon = "", $telefono = "")
    {
        parent::__construct(
            $nombre_Profesor,
            $id,
            $correo,
            $clave,
            $foto
        );
        $this->id_AreaCon = $id_AreaCon;
        $this->telefono = $telefono;
    }



    /**
     * Get the value of id_AreaCon
     */
    public function getId_AreaCon()
    {
        return $this->id_AreaCon;
    }

    /**
     * Set the value of id_AreaCon
     *
     * @return  self
     */
    public function setId_AreaCon($id_AreaCon)
    {
        $this->id_AreaCon = $id_AreaCon;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function listarProfesores() {

        return "SELECT 
                p.Nombre_Profesor AS nombre,
                p.Correo AS correo,
                p.Tel AS telefono,
                a.Nombre_Area AS area,
                d.Nombre_Departamento AS departamento,
                (
                    SELECT JSON_ARRAYAGG(asig.Nombre_Asignatura)
                    FROM curso_profesor cp
                    INNER JOIN curso c ON cp.id_curso = c.id_curso
                    INNER JOIN asignatura asig ON c.id_asignatura = asig.Id_Asignatura
                    WHERE cp.Id_Profesor = p.Id_Profesor
                ) AS cursos
            FROM profesor p
            INNER JOIN area_con a ON p.Id_AreaCon = a.Id_Area
            INNER JOIN departamento d ON a.Id_Departamento = d.Id_Departamento;";

    }
}
