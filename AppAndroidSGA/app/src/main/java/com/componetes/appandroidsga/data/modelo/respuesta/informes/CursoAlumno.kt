package com.componetes.appandroidsga.data.modelo.respuesta.informes

data class CursoAlumno(
    val id_curso: String,
    val asignatura: String,
    val profesor: String,
    val horario: HorarioCurso
)