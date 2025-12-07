<?php
require_once('PersonaDAO.php');
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
    p.Id_Profesor,
    p.Nombre_Profesor AS nombre,
    p.Correo AS correo,
    p.Tel AS telefono,
    a.Nombre_Area AS area,
    d.Nombre_Departamento AS departamento,
    GROUP_CONCAT(DISTINCT asig.Nombre_Asignatura SEPARATOR '|||') AS cursos_concat
FROM profesor p
INNER JOIN area_con a ON p.Id_AreaCon = a.Id_Area
INNER JOIN departamento d ON a.Id_Departamento = d.Id_Departamento
LEFT JOIN curso_profesor cp ON p.Id_Profesor = cp.Id_Profesor
LEFT JOIN curso c ON cp.id_curso = c.id_curso
LEFT JOIN asignatura asig ON c.id_asignatura = asig.Id_Asignatura
GROUP BY 
    p.Id_Profesor, p.Nombre_Profesor, p.Correo, p.Tel, 
    a.Nombre_Area, d.Nombre_Departamento;

";

    }
}
