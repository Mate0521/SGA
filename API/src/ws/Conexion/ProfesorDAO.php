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

        return "";

    }
}
