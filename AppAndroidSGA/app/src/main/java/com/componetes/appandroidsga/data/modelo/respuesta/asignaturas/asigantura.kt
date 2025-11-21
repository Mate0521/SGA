package com.componetes.appandroid.data.modelo.respuesta.asignaturas

import java.io.Serializable

data class Asignatura(
    val id: Int,
    val nombre: String,
    val nombre_car: String,
    val duracion: Int,
    val creditos_teoricos: Int,
    val creditos_lab: Int,
    val curso: List<Int>            // ids de cursos
): Serializable
