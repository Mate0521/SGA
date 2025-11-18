<?php
class AsignaturaProfesor
{
    private $asignatura;
    private $profesor;

    public function __construct($asignatura = "", $profesor = "")
    {
        $this->asignatura = $asignatura;
        $this->profesor = $profesor;
    }

    /**
     * Get the value of asignatura
     */ 
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * Set the value of asignatura
     *
     * @return  self
     */ 
    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    /**
     * Get the value of profesor
     */ 
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set the value of profesor
     *
     * @return  self
     */ 
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    
}
