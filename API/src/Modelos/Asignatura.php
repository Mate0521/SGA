<?php

require_once '../Conexion/Conexion.php';
require_once '../DAO/AsignaturaDAO.php';

class Asignatura
{

        /*
        2. una archivo exclusivo para la consulta de asignaturas (lo mismo no le voy ha enviar nada ).

        datos que me debe de dar (con el mismo nombre ):
        nombre: nombre de la asigantura.
        nombre_car:nombre de la carrera a la que pertenece 
        duracion: cantidad de semanas que dura, si es posible pasemelo a cantidad de meses que dura
        creditos_teoricos: de la asignatura 
        creditos_lab: de la asignatura
        curso:{}->listado del id de los cursos que dan esta asignatura
        */

        private $id_Asignatura;
        private $nombre;
        private $id_Carrera;
        private $duracion;
        private $cre_Laboratorio;
        private $cre_Teoria;

        public function __construct(
                $id_Asignatura = "",
                $nombre = "",
                $id_Carrera = "",
                $duracion = "",
                $cre_Laboratorio = "",
                $cre_Teoria = ""
        ) {
                $this->id_Asignatura = $id_Asignatura;
                $this->nombre = $nombre;
                $this->id_Carrera = $id_Carrera;
                $this->duracion = $duracion;
                $this->cre_Laboratorio = $cre_Laboratorio;
                $this->cre_Teoria = $cre_Teoria;
        }

        

        /**
         * Get the value of id_Asignatura
         */ 
        public function getId_Asignatura()
        {
                return $this->id_Asignatura;
        }

        /**
         * Set the value of id_Asignatura
         *
         * @return  self
         */ 
        public function setId_Asignatura($id_Asignatura)
        {
                $this->id_Asignatura = $id_Asignatura;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of id_Carrera
         */ 
        public function getId_Carrera()
        {
                return $this->id_Carrera;
        }

        /**
         * Set the value of id_Carrera
         *
         * @return  self
         */ 
        public function setId_Carrera($id_Carrera)
        {
                $this->id_Carrera = $id_Carrera;

                return $this;
        }

        /**
         * Get the value of duracion
         */ 
        public function getDuracion()
        {
                return $this->duracion;
        }

        /**
         * Set the value of duracion
         *
         * @return  self
         */ 
        public function setDuracion($duracion)
        {
                $this->duracion = $duracion;

                return $this;
        }

        /**
         * Get the value of cre_Laboratorio
         */ 
        public function getCre_Laboratorio()
        {
                return $this->cre_Laboratorio;
        }

        /**
         * Set the value of cre_Laboratorio
         *
         * @return  self
         */ 
        public function setCre_Laboratorio($cre_Laboratorio)
        {
                $this->cre_Laboratorio = $cre_Laboratorio;

                return $this;
        }

        /**
         * Get the value of cre_Teoria
         */ 
        public function getCre_Teoria()
        {
                return $this->cre_Teoria;
        }

        /**
         * Set the value of cre_Teoria
         *
         * @return  self
         */ 
        public function setCre_Teoria($cre_Teoria)
        {
                $this->cre_Teoria = $cre_Teoria;

                return $this;
        }

        public function listaAsignaturas()
        {

        }
}
