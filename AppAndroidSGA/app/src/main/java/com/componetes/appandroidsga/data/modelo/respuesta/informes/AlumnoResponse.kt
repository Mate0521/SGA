package com.componetes.appandroidsga.data.modelo.respuesta.informes

data class AlumnoResponse(
    val nombre: String,
    val correo: String,
    val cursos: List<CursoAlumno>
)