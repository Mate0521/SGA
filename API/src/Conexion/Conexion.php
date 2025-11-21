<?php

class Conexion
{
    private $conexion;
    private $resultado;

    public function abrir()
    {
        //if($_SERVER['REMOTE_ADDR'] == "::1"){
        $this->conexion = new mysqli("localhost", "root", "", "UniLocos");
        //}else{
        //$this -> conexion = new mysqli("localhost", "itiud_cocinaetilica", "UXpieQ728%", "itiud_cocinaetilica");
        //}
    }

    public function cerrar()
    {
        $this->conexion->close();
    }

    public function ejecutar($sql)
    {
        $this->resultado = $this->conexion->query($sql);

        if (!$this->resultado) {
            die("SQL ERROR: " . $this->conexion->error .
                "<br>Consulta: " . $sql);
        }
    }


    public function registro()
    {
        return $this->resultado->fetch_row();
    }

    public function filas()
    {
        return $this->resultado->num_rows;
    }


    /**
     * Get the value of resultado
     */
    public function getResultado()
    {
        return $this->resultado;
    }
}
