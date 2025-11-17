package com.componetes.appandroid.data.modelo.respuesta.profesores

data class Profesor(
    val id: Int,
    val nombre: String,
    val correo: String,
    val telefono: String,
    val area: String,
    val departamento: String,
    val cursos: List<String>
)
